<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\SpamFreeMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function direct()
    {
        $details = [
            'title' => 'Direct Mail from SHALA US',
            'body' => 'This is DIRECT testing email using smtp'
        ];

        Mail::to('mansha99@gmail.com')->send(new SpamFreeMail($details));

        return response()->json(['message' => 'SUCESS : Direct Mail']);
    }
    public function queue()
    {
        $details = [
            'title' => 'Queued Mail from SHALA US',
            'body' => 'This is QUEUED testing email using smtp'
        ];

        dispatch(new SendEmailJob($details));

        return response()->json(['message' => 'SUCESS :  Mail using Queue']);
    }
}
