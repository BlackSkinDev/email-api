<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Mail\Email;
use App\Mail\SendEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request){


         foreach($request['emails'] as $key => $data){
             $email= New Email($data);
             SendEmail::dispatch($email);
         }



         return response()->json(['msg'=>'Mail Sent'],200);


    }
}
