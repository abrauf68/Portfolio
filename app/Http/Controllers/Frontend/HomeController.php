<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\CompanyService;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function home()
    {
        try {
            return view('frontend.pages.home');
        } catch (\Throwable $th) {
            Log::error('Home view Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function about()
    {
        try {
            return view('frontend.pages.about');
        } catch (\Throwable $th) {
            Log::error('About view Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function services($slug = null)
    {
        try {
            if($slug !== null){
                $service = CompanyService::where('slug', $slug)->first();
                if($service->is_active !== 'active'){
                    return redirect()->back()->with('message', "This service has been deactivated!");
                }
                $allServices = CompanyService::where('is_active', 'active')->get();
                return view('frontend.pages.service_details', compact('service','allServices'));
            }else{
                $services = CompanyService::where('is_active', 'active')->get();
                return view('frontend.pages.services', compact('services'));
            }
        } catch (\Throwable $th) {
            Log::error('Services View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function blogs($categorySlug = null, $blogSlug = null)
    {
        try {
            if($categorySlug !== null && $blogSlug !== null ){
                $blog = Blog::with('user','blogCategory')->where('slug', $blogSlug)->first();
                if($blog->is_active !== 'active'){
                    return redirect()->back()->with('message', "This blog has been deactivated!");
                }
                $blogCategory = BlogCategory::where('id', $blog->blog_category_id)->first();
                $blogComments = BlogComment::with('user.profile','replies.user.profile')->where('blog_id', $blog->id)->where('replayed_id', null)->where('is_active', 'active')->get();
                return view('frontend.pages.blogs.blog_details', compact('blog','blogCategory','blogComments'));
            } else if($categorySlug !== null && $blogSlug == null ) {
                $blogCategory = BlogCategory::where('slug', $categorySlug)->first();
                if($blogCategory->is_active !== 'active'){
                    return redirect()->back()->with('message', "This blog category has been deactivated!");
                }
                $blogs = Blog::with('user', 'blogCategory','blogComments')->where('blog_category_id', $blogCategory->id)->where('is_active', 'active')->paginate(3);
                return view('frontend.pages.blogs.blog_category', compact('blogCategory','blogs'));
            } else {
                $blogs = Blog::with('user', 'blogCategory','blogComments')->where('is_active', 'active')->paginate(3);
                return view('frontend.pages.blogs.all_blogs', compact('blogs'));
            }
        } catch (\Throwable $th) {
            Log::error('Blogs View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function blogTags($tagSlug = null)
    {
        try {
            if($tagSlug !== null){
                // dd($tagSlug);
                $blogs = Blog::with('user', 'blogCategory', 'blogComments')
                ->where('is_active', 'active')
                ->whereJsonContains('tags', $tagSlug)
                ->paginate(3);
                $blogTag = $tagSlug;
                return view('frontend.pages.blogs.blog_tag', compact('blogs','blogTag'));
            } else {
                $blogs = Blog::with('user', 'blogCategory','blogComments')->where('is_active', 'active')->paginate(3);
                return view('frontend.pages.blogs.all_blogs', compact('blogs'));
            }
        } catch (\Throwable $th) {
            Log::error('Blogs Tag View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function projects($slug = null)
    {
        try {
            if($slug !== null){
                $project = Project::where('slug', $slug)->first();
                $projectImages = ProjectImage::where('project_id', $project->id)->get();
                if($project->is_active !== 'active'){
                    return redirect()->back()->with('message', "This project has been deactivated!");
                }
                $allProjects = Project::where('is_active', 'active')->get();
                return view('frontend.pages.projects.project_details', compact('project','allProjects','projectImages'));
            }else{
                $projects = Project::where('is_active', 'active')->get();
                return view('frontend.pages.projects.all_projects', compact('projects'));
            }
        } catch (\Throwable $th) {
            Log::error('Projects View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function contact()
    {
        try {
            return view('frontend.pages.contact');
        } catch (\Throwable $th) {
            Log::error('Contact view Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
