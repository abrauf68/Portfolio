<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('update counter');
        try {
            $counter = Counter::first();
            return view('dashboard.counter.edit', compact('counter'));
        } catch (\Throwable $th) {
            Log::error('Counter Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update counter');
        $validator = Validator::make($request->all(), [
            'years_of_experience' => 'required|integer|min:0',
            'total_projects' => 'required|integer|min:0',
            'completed_projects' => 'required|integer|min:0',
            'total_clients' => 'required|integer|min:0',
            'client_reviews' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $counter = Counter::findOrFail($id);
            $counter->years_of_experience = $request->years_of_experience;
            $counter->total_projects = $request->total_projects;
            $counter->completed_projects = $request->completed_projects;
            $counter->total_clients = $request->total_clients;
            $counter->client_reviews = $request->client_reviews;
            $counter->save();

            return redirect()->route('dashboard.counters.index')->with('success', 'Counters Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Counters Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
