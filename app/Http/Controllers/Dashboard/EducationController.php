<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view education');
        try {
            $educations = Education::get();
            return view('dashboard.education.index', compact('educations'));
        } catch (\Throwable $th) {
            Log::error('Educations Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create education');
        try {
            return view('dashboard.education.create');
        } catch (\Throwable $th) {
            Log::error('Education Create Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('create education');
        $validator = Validator::make($request->all(), [
            'institute_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'from_date' => 'required|string|max:255',
            'to_date' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('Education Store Validation Failed', ['error' => $validator->errors()->all()]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $education = new Education();
            $education->institute_name = $request->institute_name;
            $education->course_name = $request->course_name;
            $education->from_date = $request->from_date;
            $education->to_date = $request->to_date;
            $education->description = $request->description;

            $education->save();

            DB::commit();
            return redirect()->route('dashboard.educations.index')->with('success', 'Education Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Education Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update education');
        try {
            $education = Education::findOrFail($id);
            return view('dashboard.education.edit', compact('education'));
        } catch (\Throwable $th) {
            Log::error('Education Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update education');
        $validator = Validator::make($request->all(), [
            'institute_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'from_date' => 'required|string|max:255',
            'to_date' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $education = Education::findOrFail($id);
            $education->institute_name = $request->institute_name;
            $education->course_name = $request->course_name;
            $education->from_date = $request->from_date;
            $education->to_date = $request->to_date;
            $education->description = $request->description;

            $education->save();

            return redirect()->route('dashboard.educations.index')->with('success', 'Education Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Education Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete education');
        try {
            $education = Education::findOrFail($id);
            $education->delete();
            return redirect()->back()->with('success', 'Education Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Education Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update education');
        try {
            $education = Education::findOrFail($id);
            $message = $education->is_active == 'active' ? 'Education Deactivated Successfully' : 'Education Activated Successfully';
            if ($education->is_active == 'active') {
                $education->is_active = 'inactive';
                $education->save();
            } else {
                $education->is_active = 'active';
                $education->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Education Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
