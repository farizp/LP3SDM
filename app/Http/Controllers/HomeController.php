<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){

        $blog = Blog::all();
        $title = 'Beranda';

        return view('home', ['blog' => $blog, 'title' => $title]);
    }
}
