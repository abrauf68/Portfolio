<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyService;
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

    // public function services()
    // {
    //     try {
    //         return view('frontend.pages.services');
    //     } catch (\Throwable $th) {
    //         Log::error('Services view Failed', ['error' => $th->getMessage()]);
    //         return redirect()->back()->with('error', "Something went wrong! Please try again later");
    //         throw $th;
    //     }
    // }
}
