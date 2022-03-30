<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Sertifikat;

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

        $user = User::findOrFail($id);
        $sertifikat = Sertifikat::join('pelatihans', 'sertifikats.pelatihan_id', '=', 'pelatihans.id')
                            ->join('post_data', 'sertifikats.peserta_id', '=', 'post_data.id')
                            ->get();
        
        $title = $user->name;

        return view('profile', [
            'user' => $user, 
            'title' => $title,
            'sertifikat' => $sertifikat
        ]);

    }
}
