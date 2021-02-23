<?php

namespace App\Http\Controllers\Portals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PragmaRX\Countries\Package\Countries;
use App\Models\ContactEmail;

class MailController extends Controller
{
    protected $fromEmail, $fromName;

    public function __construct()
    {
        $this->fromEmail = config('mail.from.address');
        $this->fromName = config('app.name');
    }

    /**
     * Show the compose for sending email.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewCompose()
    {
        $pageTitle = __('global.emails.emailUs');

        return view('portals.emails.compose', compact('pageTitle'));
    }

    /**
     * Send email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'subject' => ['required', 'string', 'max:255'],
            'enquiry' => ['required']
        ]);

        $data = [
            'subject' => $validated['subject'],
            'name' => $request->user()->name,
            'company' => $request->user()->company,
            'country' => Countries::where('cca2', $request->user()->country)->first()->name->common,
            'website' => $request->user()->website,
            'email' => $request->user()->email,
            'enquiry' => $validated['enquiry'],
            'fromEmail' => $this->fromEmail,
            'fromName' => $this->fromName,
            'receiveEmail' => ContactEmail::all()->pluck('email')->toArray()
        ];

        try {
            Mail::send('portals.emails.template', $data, function ($message) use ($data) {
                $message->from($data['fromEmail'], $data['fromName'])
                    ->bcc($data['receiveEmail'])
                    ->subject($data['subject']);
            });
        } catch (Exception $exception) {
            return redirect()->route('portal.emails.compose')
                ->with('status', 'danger')
                ->with('message', $exception->getMessage());

        }

        return redirect()->route('portal.emails.compose')
            ->with('status', 'success')
            ->with('message', __('global.emails.message.sendSuccess'));
    }
}
