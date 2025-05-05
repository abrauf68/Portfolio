<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view experience');
        try {
            $experiences = Experience::get();
            return view('dashboard.experience.index', compact('experiences'));
        } catch (\Throwable $th) {
            Log::error('Experiences Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create experience');
        try {
            return view('dashboard.experience.create');
        } catch (\Throwable $th) {
            Log::error('Experiences Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->authorize('create experience');
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|string|max:255',
            'company_url' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'from_date' => 'required|string|max:255',
            'to_date' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('Experience Store Validation Failed', ['error' => $validator->errors()->all()]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $experience = new Experience();
            $experience->company_name = $request->company_name;
            $experience->company_url = $request->company_url;
            $experience->role = $request->role;
            $experience->from_date = $request->from_date;
            $experience->to_date = $request->to_date;
            $experience->description = $request->description;

            $experience->save();

            DB::commit();
            return redirect()->route('dashboard.experiences.index')->with('success', 'Experience Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Experience Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
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
        $this->authorize('update experience');
        try {
            $experience = Experience::findOrFail($id);
            return view('dashboard.experience.edit', compact('experience'));
        } catch (\Throwable $th) {
            Log::error('Experience Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update experience');
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|string|max:255',
            'company_url' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'from_date' => 'required|string|max:255',
            'to_date' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $experience = Experience::findOrFail($id);
            $experience->company_name = $request->company_name;
            $experience->company_url = $request->company_url;
            $experience->role = $request->role;
            $experience->from_date = $request->from_date;
            $experience->to_date = $request->to_date;
            $experience->description = $request->description;

            $experience->save();

            return redirect()->route('dashboard.experiences.index')->with('success', 'Experience Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Experience Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete experience');
        try {
            $experience = Experience::findOrFail($id);
            $experience->delete();
            return redirect()->back()->with('success', 'Experience Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Experience Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update experience');
        try {
            $experience = Experience::findOrFail($id);
            $message = $experience->is_active == 'active' ? 'Experience Deactivated Successfully' : 'Experience Activated Successfully';
            if ($experience->is_active == 'active') {
                $experience->is_active = 'inactive';
                $experience->save();
            } else {
                $experience->is_active = 'active';
                $experience->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Experience Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
