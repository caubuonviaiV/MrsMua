<?php

namespace App\Http\Controllers\User;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{


    public function index()
    {
        $aboutus = Aboutus::all();
        return view('user.contact.index')->with(compact('aboutus'));
    }

    public function postContact(Request $request) 
    {
        Mail::send('user.mail.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
        ], function($mail) use($request) {
            $mail->to('trungdao10a1@gmail.com', $request->name);
            $mail->from($request->email);
            $mail->subject('Khách hàng iên hệ');
        });
    }


}
