<?php
/**
 * Created by PhpStorm.
 * User: ilma
 * Date: 22/02/2016
 * Time: 16.30
 */

namespace App\Http\Controllers\V1\Sendmail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'to.email'  => 'required',
            'to.name'   => 'required|string',
            'subject'   => 'required',
            'text'      => 'required',
        ]);

        $email  = $request->all();
        $data   = [
            'text'  => $request->get('text')
        ];

        Mail::send('emails.default', $data, function ($message) use ($email) {
            $message->to($email['to']['email'], $email['to']['name']);
            $message->subject($email['subject']);
        });

        return [
            'status'    => 'success',
            'message'   => 'Mail has been send.'
        ];
    }

    public function welcome(Request $request)
    {
        $this->validate($request, [
            'to.email'  => 'required',
            'to.name'   => 'required|string',
            'subject'   => 'required',
            'link'      => 'required'
        ]);

        $email  = $request->all();
        $data   = [
            'email' => $email['to']['email'],  
            'link'  => $request->get('link')
        ];

        Mail::send('emails.welcome', $data, function ($message) use ($email) {
            $message->to($email['to']['email'], $email['to']['name']);
            $message->subject($email['subject']);
        });

        return [
            'status'    => 'success',
            'message'   => 'Mail has been send.'
        ];
    }

    public function forgotPassword(Request $request)
    {
        $this->validate($request, [
            'to.email'  => 'required',
            'to.name'   => 'required|string',
            'subject'   => 'required',
            'link'      => 'required'
        ]);

        $email  = $request->all();
        $data   = [
            'email' => $email['to']['email'],  
            'link'  => $request->get('link')
        ];

        Mail::send('emails.forgot-password', $data, function ($message) use ($email) {
            $message->to($email['to']['email'], $email['to']['name']);
            $message->subject($email['subject']);
        });

        return [
            'status'    => 'success',
            'message'   => 'Mail has been send.'
        ];
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'to.email'  => 'required',
            'to.name'   => 'required|string',
            'subject'   => 'required',
            'link'      => 'required'
        ]);

        $email  = $request->all();
        $data   = [
            'email' => $email['to']['email'],  
            'link'  => $request->get('link')
        ];

        Mail::send('emails.register', $data, function ($message) use ($email) {
            $message->to($email['to']['email'], $email['to']['name']);
            $message->subject($email['subject']);
        });

        return [
            'status'    => 'success',
            'message'   => 'Mail has been send.'
        ];
    }
}