<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactEmail;

class ContactUsController extends Controller
{
    protected $fromEmail, $fromName;

    public function __construct()
    {
        $this->fromEmail = config('mail.from.address');
        $this->fromName = config('app.name');
    }

    public function getContactUs()
    {
        $pageTitle = __('global.contactUs.title');
        $countries = Countries::all()
            ->map(function ($country) {
                return [
                    'code' => $country->cca2,
                    'name' => $country->name->common
                ];
            })
            ->values();

        return view('contact-us.view', compact('pageTitle', 'countries'));
    }

    public function postContactUs(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'company' => [],
            'country' => ['required'],
            'telephone' => ['required'],
            'website' => [],
            'email' => ['required', 'email'],
            'enquiry' => ['required'],
            'g-recaptcha-response' => ['required', 'captcha'],
        ]);

        $validated['recevieEmails'] = ContactEmail::all()->pluck('email')->toArray();
        $validated['fromEmail'] = $this->fromEmail;
        $validated['fromName'] = $this->fromName;
        $validated['subject'] = 'Contact Us of ' . config('app.name');
        $validated['country'] = Countries::where('cca2', $validated['country'])->first()->name->common;

        try {
            Mail::send('contact-us.template',
                $validated,
                function ($message) use ($validated) {
                    $message->from($validated['fromEmail'], $validated['fromName'])
                        ->bcc($validated['recevieEmails'])
                        ->subject($validated['subject']);
                }
            );
        } catch (Exception $exception) {
            return redirect()->route('contact-us.view')
                ->with('status', 'danger')
                ->with('message', $exception->getMessage());

        }

        return redirect()->route('contact-us.view')
            ->with('status', 'success')
            ->with('message', __('global.contactUs.message.sendSuccess'));
    }
}
