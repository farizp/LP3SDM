<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('register', [
            'title' => 'Pendaftaran Akun'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nip' => 'required|min:10|max:15|unique:users',
            'level' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Pendaftaran Berhasil, Silahkan Masuk!');

        return redirect('/login')->with('success', 'Pendaftaran Berhasil, Silahkan Masuk!');
    }
}
