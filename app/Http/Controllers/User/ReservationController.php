<?php

namespace App\Http\Controllers\User;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{

    public function index()
    {
        return view('user.reservation');
    }
     
     public function postReservation(Request $request) 
     {
         Mail::send('user.mail.reservation', [
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'content' => $request->content,
             'people' => $request->people,
             'time' => $request->time,
             'datepicker_field' => $request->datepicker_field,

         ], function($mail) use($request) {
             $mail->to('trungdao10a1@gmail.com', $request->name);
             $mail->from($request->email);
             $mail->subject('Khách hàng đặt bàn');
         });
     }
}
