<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailsController extends Controller
{
    public function sendMailToSupport(Request $request)
    {
        \Mail::send('emails.contact', ['data' => $request], function ($m) use ($request) {
            $m->to(env('MAILGUN_TO'))
                ->subject('Weblap: Kapcsolat')
                ->from($request->email, $request->name);
        });

        return back();
    }

}
