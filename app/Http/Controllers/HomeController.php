<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index(){

        $blog = Blog::all();
        $setting = Setting::all();
        $title = 'Beranda';

        return view('home', [
            'blog' => $blog, 
            'title' => $title,
            'setting' => $setting
        ]);
    }
}
