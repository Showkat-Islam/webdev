<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(){
      return view('contact');
    }
    public function contactPost(Request $request){
         $this->validate($request,[
                          'name'=> 'required',
                          'email' => 'required|email',
                          'comment' => 'required'
                            ]);

                Mail::send('email', [
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'comment' => $request->get('comment')],
                    function($message){
                      $message->from('showkattuhin88766@gmail.com');
                      $message->to('showkattuhin88766@gmail.com,RexoiT')
                              ->subject('This the Subject of body');

                    }) ;
                    return back()->with('success','Thanks for contacting us, we will get back to you soon');


    }
}
