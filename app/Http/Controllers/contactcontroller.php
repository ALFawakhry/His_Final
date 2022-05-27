<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class contactcontroller extends Controller
{
    public function send(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email' ,
            'subject'=>'required',
            'message'=>'required',
            'phone'=>'required'
        ]);

        if($this->isonline())
        {
          $mail_data = 
          [
              'recipient'=>'eng.taha1608@gmail.com',
              'fromEmail'=>$request->email,
              'fromName'=>$request->name,
              'subject'=>$request->subject,
              'phone'=>$request->phone,
              'body'=>$request->message
          ];
          
          Mail::send('email-templete',$mail_data, function($message) use ($mail_data)
          {
              $message->to($mail_data['recipient'])
                      ->from($mail_data['fromEmail'],$mail_data['fromName'] )
                      ->subject($mail_data['subject']);
          });
          return redirect()->back()->with('success','Email Sent!');
        }else{
            return redirect()->back()->withInput()->with('error','check your internet connection');
        }
    
    }
    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }else{
            return false;
        }
    }
}

