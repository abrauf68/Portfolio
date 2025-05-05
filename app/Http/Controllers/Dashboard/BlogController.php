<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view blog');
        try {
            $blogs = Blog::with('blogCategory')->get();
            return view('dashboard.blog.index', compact('blogs'));
        } catch (\Throwable $th) {
            Log::error('Blogs Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create blog');
        try {
            $blogCategories = BlogCategory::where('is_active', 'active')->get();
            $uniqueTags = collect(Blog::pluck('tags'))
                ->map(function ($item) {
                    return json_decode($item, true); // Convert string to array
                })
                ->flatten()
                ->filter() // remove nulls
                ->unique()
                ->values()
                ->all();

            return view('dashboard.blog.create', compact('blogCategories','uniqueTags'));
        } catch (\Throwable $th) {
            Log::error('Blog Create Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('create blog');
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug',
            'blog_category_id' => 'nullable|exists:blog_categories,id',
            'meta_image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'meta_description' => 'required|string|max:255',
            'content' => 'required',
            'tags' => 'nullable',
        ]);

        if ($validator->fails()) {
            Log::error('Blog Store Validation Failed', ['error' => $validator->errors()->all()]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();

            $blog = new Blog();
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            $blog->blog_category_id = $request->blog_category_id ?? null;
            $blog->user_id = auth()->user()->id;
            $blog->meta_description = $request->meta_description;
            $blog->content = $request->content;
            if($request->tags)
            {
                $tags = json_encode(
                    collect(json_decode($request->tags, true))->pluck('value')->all()
                );
                $blog->tags = $tags;
            }

            if ($request->hasFile('meta_image')) {
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/blogs';
                $Image->move(public_path($Image_path), $Image_name);
                $blog->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/blogs';
                $Image->move(public_path($Image_path), $Image_name);
                $blog->main_image = $Image_path . "/" . $Image_name;
            }

            $blog->save();

            DB::commit();
            return redirect()->route('dashboard.blogs.index')->with('success', 'Blog Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Blog Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update blog');
        try {
            $blogCategories = BlogCategory::where('is_active', 'active')->get();
            $uniqueTags = collect(Blog::pluck('tags'))
                ->map(function ($item) {
                    return json_decode($item, true); // Convert string to array
                })
                ->flatten()
                ->filter() // remove nulls
                ->unique()
                ->values()
                ->all();
            $blog = Blog::findOrFail($id);
            return view('dashboard.blog.edit', compact('blog','blogCategories','uniqueTags'));
        } catch (\Throwable $th) {
            Log::error('Blog Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update blog');
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,'.$id,
            'blog_category_id' => 'nullable|exists:blog_categories,id',
            'meta_image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
            'meta_description' => 'required|string|max:255',
            'content' => 'required',
            'tags' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $blog = Blog::findOrFail($id);
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            $blog->blog_category_id = $request->blog_category_id ?? null;
            $blog->meta_description = $request->meta_description;
            $blog->content = $request->content;
            if($request->tags)
            {
                $tags = json_encode(
                    collect(json_decode($request->tags, true))->pluck('value')->all()
                );
                $blog->tags = $tags;
            }


            if ($request->hasFile('meta_image')) {
                if (isset($blog->meta_image) && File::exists(public_path($blog->meta_image))) {
                    File::delete(public_path($blog->meta_image));
                }
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/blogs';
                $Image->move(public_path($Image_path), $Image_name);
                $blog->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                if (isset($blog->main_image) && File::exists(public_path($blog->main_image))) {
                    File::delete(public_path($blog->main_image));
                }
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/blogs';
                $Image->move(public_path($Image_path), $Image_name);
                $blog->main_image = $Image_path . "/" . $Image_name;
            }

            $blog->save();

            return redirect()->route('dashboard.blogs.index')->with('success', 'Blog Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Blog Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete blog');
        try {
            $blog = Blog::findOrFail($id);
            if (isset($blog->meta_image) && File::exists(public_path($blog->meta_image))) {
                File::delete(public_path($blog->meta_image));
            }
            if (isset($blog->main_image) && File::exists(public_path($blog->main_image))) {
                File::delete(public_path($blog->main_image));
            }
            $blog->delete();
            return redirect()->back()->with('success', 'Blog Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Blog Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update blog');
        try {
            $blog = Blog::findOrFail($id);
            $message = $blog->is_active == 'active' ? 'Blog Deactivated Successfully' : 'Blog Activated Successfully';
            if ($blog->is_active == 'active') {
                $blog->is_active = 'inactive';
                $blog->save();
            } else {
                $blog->is_active = 'active';
                $blog->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Blog Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
