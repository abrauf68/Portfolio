<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SupportedCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SupportedCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view supported company');
        try {
            $supportedCompanies = SupportedCompany::get();
            return view('dashboard.supported-company.index', compact('supportedCompanies'));
        } catch (\Throwable $th) {
            Log::error('SupportedCompany Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create supported company');
        try {
            return view('dashboard.supported-company.create');
        } catch (\Throwable $th) {
            Log::error('SupportedCompany Create Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('create supported company');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max_size',
        ]);

        if ($validator->fails()) {
            Log::error('SupportedCompany Store Validation Failed', ['error' => $validator->errors()->all()]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $supportedCompany = new SupportedCompany();
            $supportedCompany->name = $request->name;
            $supportedCompany->url = $request->url;
            if ($request->hasFile('logo')) {
                $Image = $request->file('logo');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . 'logo.' . $Image_ext;

                $Image_path = 'uploads/company/supported_companies';
                $Image->move(public_path($Image_path), $Image_name);
                $supportedCompany->logo = $Image_path . "/" . $Image_name;
            }

            $supportedCompany->save();

            DB::commit();
            return redirect()->route('dashboard.supported-companies.index')->with('success', 'Supported Company Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('SupportedCompany Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update supported company');
        try {
            $supportedCompany = SupportedCompany::findOrFail($id);
            return view('dashboard.supported-company.edit', compact('supportedCompany'));
        } catch (\Throwable $th) {
            Log::error('SupportedCompany Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update supported company');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $supportedCompany = SupportedCompany::findOrFail($id);
            $supportedCompany->name = $request->name;
            $supportedCompany->url = $request->url;
            if ($request->hasFile('logo')) {
                if (isset($supportedCompany->logo) && File::exists(public_path($supportedCompany->logo))) {
                    File::delete(public_path($supportedCompany->logo));
                }
                $Image = $request->file('logo');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . 'logo.' . $Image_ext;

                $Image_path = 'uploads/company/supported_companies';
                $Image->move(public_path($Image_path), $Image_name);
                $supportedCompany->logo = $Image_path . "/" . $Image_name;
            }

            $supportedCompany->save();

            return redirect()->route('dashboard.supported-companies.index')->with('success', 'Supported Company Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('SupportedCompany Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete supported company');
        try {
            $supportedCompany = SupportedCompany::findOrFail($id);
            $supportedCompany->delete();
            return redirect()->back()->with('success', 'Supported Company Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('SupportedCompany Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update supported company');
        try {
            $supportedCompany = SupportedCompany::findOrFail($id);
            $message = $supportedCompany->is_active == 'active' ? 'Supported Company Deactivated Successfully' : 'Supported Company Activated Successfully';
            if ($supportedCompany->is_active == 'active') {
                $supportedCompany->is_active = 'inactive';
                $supportedCompany->save();
            } else {
                $supportedCompany->is_active = 'active';
                $supportedCompany->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('SupportedCompany Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}