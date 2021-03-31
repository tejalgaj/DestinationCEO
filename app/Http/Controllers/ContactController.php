<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use email;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact');
}
public function contactPost(Request $request){

    
    $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required|email',
                    'query' => 'required',
                    'phone' => 'required'
            ]);

    
    Mail::send('email', array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'query' => $request->get('query'),
        'phone' => $request->get('phone'),
    ), function($message) use ($request){
        $message->from($request->email);
        $message->to('destinationceo12@gmail.com', 'Admin')->subject($request->get('query'));
    });
    return back()->with('success', 'Thanks for contacting Admin!');
    

   
}
}
