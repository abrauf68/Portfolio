<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view project');
        try {
            $projects = Project::all();
            return view('dashboard.project.index', compact('projects'));
        } catch (\Throwable $th) {
            Log::error('Projects Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create project');
        try {
            return view('dashboard.project.create');
        } catch (\Throwable $th) {
            Log::error('Project Create Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('create project');
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:projects,slug',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'description' => 'required',
            'meta_image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'client_name' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'technology' => 'nullable|string|max:255',
            'project_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'status' => 'required|in:completed,ongoing,upcoming',
            'completion_date' => 'nullable|date',
            'is_featured' => 'nullable|in:on',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $project = new Project();
            $project->title = $request->title;
            $project->slug = $request->slug;
            $project->meta_title = $request->meta_title;
            $project->meta_description = $request->meta_description;
            $project->description = $request->description;
            $project->is_featured = $isFeatured;
            $project->client_name = $request->client_name;
            $project->industry = $request->industry;
            $project->technology = $request->technology;
            $project->project_url = $request->project_url;
            $project->github_url = $request->github_url;
            $project->status = $request->status;
            $project->completion_date = $request->completion_date;

            if ($request->hasFile('meta_image')) {
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/projects';
                $Image->move(public_path($Image_path), $Image_name);
                $project->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/projects';
                $Image->move(public_path($Image_path), $Image_name);
                $project->main_image = $Image_path . "/" . $Image_name;
            }

            $project->save();

            DB::commit();
            return redirect()->route('dashboard.projects.index')->with('success', 'Project Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Project Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update project');
        try {
            $project = Project::findOrFail($id);
            return view('dashboard.project.edit', compact('project'));
        } catch (\Throwable $th) {
            Log::error('Project Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update project');
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:projects,slug,' . $id,
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'description' => 'required',
            'meta_image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
            'client_name' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'technology' => 'nullable|string|max:255',
            'project_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'status' => 'required|in:completed,ongoing,upcoming',
            'completion_date' => 'nullable|date',
            'is_featured' => 'nullable|in:on',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $project = Project::findOrFail($id);
            $project->title = $request->title;
            $project->slug = $request->slug;
            $project->meta_title = $request->meta_title;
            $project->meta_description = $request->meta_description;
            $project->description = $request->description;
            $project->is_featured = $isFeatured;
            $project->client_name = $request->client_name;
            $project->industry = $request->industry;
            $project->technology = $request->technology;
            $project->project_url = $request->project_url;
            $project->github_url = $request->github_url;
            $project->status = $request->status;
            $project->completion_date = $request->completion_date;


            if ($request->hasFile('meta_image')) {
                if (isset($project->meta_image) && File::exists(public_path($project->meta_image))) {
                    File::delete(public_path($project->meta_image));
                }
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/projects';
                $Image->move(public_path($Image_path), $Image_name);
                $project->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                if (isset($project->main_image) && File::exists(public_path($project->main_image))) {
                    File::delete(public_path($project->main_image));
                }
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/projects';
                $Image->move(public_path($Image_path), $Image_name);
                $project->main_image = $Image_path . "/" . $Image_name;
            }

            $project->save();

            return redirect()->route('dashboard.projects.index')->with('success', 'Project Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Project Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete project');
        try {
            $project = Project::findOrFail($id);
            if (isset($project->meta_image) && File::exists(public_path($project->meta_image))) {
                File::delete(public_path($project->meta_image));
            }
            if (isset($project->main_image) && File::exists(public_path($project->main_image))) {
                File::delete(public_path($project->main_image));
            }
            $projectImages = ProjectImage::where('project_id', $id)->get();
            foreach ($projectImages as $projectImage) {
                if (isset($projectImage->image) && File::exists(public_path($projectImage->image))) {
                    File::delete(public_path($projectImage->image));
                }
                $projectImage->delete();
            }
            $project->delete();
            return redirect()->back()->with('success', 'Project Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Project Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update project');
        try {
            $project = Project::findOrFail($id);
            $message = $project->is_active == 'active' ? 'Project Deactivated Successfully' : 'Project Activated Successfully';
            if ($project->is_active == 'active') {
                $project->is_active = 'inactive';
                $project->save();
            } else {
                $project->is_active = 'active';
                $project->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Project Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function showProjectImages(string $id)
    {
        try {
            $this->authorize('update project');
            $project = Project::findOrFail($id);
            $projectImages = ProjectImage::where('project_id', $id)->get();
            return view('dashboard.project.project-images.index', compact('projectImages','project'));
        } catch (\Throwable $th) {
            Log::error('Project Images Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function createProjectImages($id)
    {
        $this->authorize('update project');
        try {
            $project = Project::findOrFail($id);
            return view('dashboard.project.project-images.create', compact('project'));
        } catch (\Throwable $th) {
            Log::error('Project Images Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function storeProjectImages(Request $request, $id)
    {
        // dd($request->all());
        $this->authorize('update project');
        $validator = Validator::make($request->all(), [
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg|max_size',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $project = Project::findOrFail($id);
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $Image_ext = $image->getClientOriginalExtension();
                    $Image_name = time() . '_image.' . $Image_ext;

                    $Image_path = 'uploads/company/projects/gallery';
                    $image->move(public_path($Image_path), $Image_name);

                    $projectImage = new ProjectImage();
                    $projectImage->project_id = $project->id;
                    $projectImage->image = $Image_path . "/" . $Image_name;
                    $projectImage->save();
                }
            }

            DB::commit();
            return redirect()->route('dashboard.projects.project-images.show', $project->id)->with('success', 'Project Images Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Project Images Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function deleteProjectImage($id)
    {
        try{
            $this->authorize('update project');
            $projectImage = ProjectImage::findOrFail($id);
            if (isset($projectImage->image) && File::exists(public_path($projectImage->image))) {
                File::delete(public_path($projectImage->image));
            }
            $projectImage->delete();
            return redirect()->back()->with('success', 'Project Image Deleted Successfully');

        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Project Image Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
