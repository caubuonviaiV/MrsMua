<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getRegister() {
        return view('User.auth.register');
    }

    public function postRegister(Request $request)
     {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->password = bcrypt($request->password);
        $admin->save(); 
        if ($admin->id) {
            return redirect()->route('getLogin');
        }
        return redirect()->back();
    }

    public function getLogin() {
        return view('user.auth.login');
    }

    public function postLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
    }

    public function getLoginOut(Request $request) {
        Auth::logout();
        return redirect()->route('home');
    }
    
}
