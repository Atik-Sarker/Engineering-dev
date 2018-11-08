<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactInfoController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        // return $request->all();

    

        return $request->all();
    }

    public function email()
    {
        $data = array('name'=>"user");
     
        Mail::send('mail/mail', $data, function($message) {
           $message->to('atikbm7@gmail.com', ' Riant Engineering Ltd')->subject
              ('User Info');
           $message->from('xyz@gmail.com');
        });
        echo "Email Sent. Check your inbox.";
     }
}
