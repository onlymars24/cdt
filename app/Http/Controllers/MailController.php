<?php

namespace App\Http\Controllers;

use App\Mail\MailApply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        Mail::to(env('MAIL_ADMIN'))->send(new MailApply($request->name, $request->phone, $request->email));
    }
}