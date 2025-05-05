<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view skill');
        try {
            $skills = Skill::get();
            return view('dashboard.skill.index', compact('skills'));
        } catch (\Throwable $th) {
            Log::error('Skills Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create skill');
        try {
            return view('dashboard.skill.create');
        } catch (\Throwable $th) {
            Log::error('Skills Create Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('create skill');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:skills,slug',
            'percentage' => 'required|integer|min:0|max:100',
            'description' => 'required|string|max:255',
            'skill_type' => 'required|in:frontend,backend',
            'is_featured' => 'nullable|in:on',
            'icon' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('Skill Store Validation Failed', ['error' => $validator->errors()->all()]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $skill = new Skill();
            $skill->name = $request->name;
            $skill->slug = $request->slug;
            $skill->percentage = $request->percentage;
            $skill->description = $request->description;
            $skill->skill_type = $request->skill_type;
            $skill->is_featured = $isFeatured;
            $skill->icon = $request->icon;

            $skill->save();

            DB::commit();
            return redirect()->route('dashboard.skills.index')->with('success', 'Skill Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Skill Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update skill');
        try {
            $skill = Skill::findOrFail($id);
            return view('dashboard.skill.edit', compact('skill'));
        } catch (\Throwable $th) {
            Log::error('Skill Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update skill');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:skills,slug,'.$id,
            'percentage' => 'required|integer|min:0|max:100',
            'description' => 'required|string|max:255',
            'skill_type' => 'required|in:frontend,backend',
            'is_featured' => 'nullable|in:on',
            'icon' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $skill = Skill::findOrFail($id);
            $skill->name = $request->name;
            $skill->slug = $request->slug;
            $skill->percentage = $request->percentage;
            $skill->description = $request->description;
            $skill->skill_type = $request->skill_type;
            $skill->is_featured = $isFeatured;
            $skill->icon = $request->icon;
            $skill->save();

            return redirect()->route('dashboard.skills.index')->with('success', 'Skill Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Skill Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete skill');
        try {
            $skill = Skill::findOrFail($id);
            $skill->delete();
            return redirect()->back()->with('success', 'Skill Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Skill Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update skill');
        try {
            $skill = Skill::findOrFail($id);
            $message = $skill->is_active == 'active' ? 'Skill Deactivated Successfully' : 'Skill Activated Successfully';
            if ($skill->is_active == 'active') {
                $skill->is_active = 'inactive';
                $skill->save();
            } else {
                $skill->is_active = 'active';
                $skill->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Skill Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
