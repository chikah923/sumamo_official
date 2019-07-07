<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AutoNotification;


class ContactUsController extends Controller
{
    public function sendContactUs(Request $Request)
    {   
        $data = $Request->all();

        $name = $data['last_name'];
        $text = $data['message'];
        $to = $data['email'];

        Mail::to($to)->send(new AutoNotification($name, $text));
        return redirect('/');
    }
}