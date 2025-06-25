<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FormSubmissionController extends Controller
{
    public function submitForm(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable',
        ];

        // If captcha is used
        if (config('captcha.version') !== 'no_captcha') {
            $rules['g-recaptcha-response'] = 'required|captcha';
        } else {
            $rules['g-recaptcha-response'] = 'nullable';
        }

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone ?? null;
            $contact->subject = $request->subject ?? null;
            $contact->message = $request->message ?? null;
            $contact->save();

            $admins = User::role(['admin', 'super-admin'])->get();
            app('notificationService')->notifyUsers(
                $admins,
                'A contact form has been submitted by ' . $request->name . '. Click to check details.',
                'contacts',
                $contact->id
            );

            // Send mail to admin
            $companyEmail = Helper::getCompanyEmail();
            // dd($companyEmail);
            if ($companyEmail !== null) {
                try {
                    Mail::to($companyEmail)->send(new ContactFormMail($contact));
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                    // throw $th;
                }
            }

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Throwable $th) {
            Log::error('Contact form Submission Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
