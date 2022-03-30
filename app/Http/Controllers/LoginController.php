<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login', [
            "title" => "Masuk"
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Masuk Gagal!');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile($id){

        $user = Auth::user($id);
        $title = $user->name;

        return view('profile', [
            'user' => $user, 
            'title' => $title
        ]);

    }
}
