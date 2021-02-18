<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
//use App\Http\Request;
use App\Http\Controllers\Controller;

class emailController extends Controller
{

 public function send(Request $request){
	 
	 $email =$request->femail;
	 $subject="Application for Android dev";
	
 $data =array('name'=>'madari');


          Mail::send('email', $data, function($message) use ($email, $subject) {
                $message->to($email)->subject($subject);

		 
		
			 $message-> attach("C:/xampp/htdocs/eat-fit-mealplan/public/img/t2.pdf");
			 
			 $message->from('showkattuhin88766@gmail.com','tuhin');
			});
			echo 'Attach mail has been sended';
		}
 public function download(){
		
		
				return view('downpdf');
		 
	}
	
// this codes for future use 	
	
//	Mail::send('emails.activation', $data, function($message, $email, $subject){
    //    $message->to($email)->subject($subject);
  //  });
           // ->with('title', "Registered Successfully.");
	 
 

}
