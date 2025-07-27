<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendMail(Request $request){
       

        $to=$request->to;

       $name = $request->name;
       $msg = $request->msg;
       $subject= $request->subject;
       Mail::to($to)->send(new WelcomeEmail($name,$msg,$subject));
      return back()->with('success',"Email sent Successfully");
    }
}
