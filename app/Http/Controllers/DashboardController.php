<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard', [
            "title" => "Blog",
            "posts" => Blog::all()
        ]);
    }

    public function blog(){

        $blog = Blog::all();
        $title = 'Blog';

        return view('blog', ['blog' => $blog, 'title' => $title]);
    }

    public function create(){
        return view('tambah-blog', [
            "title" => "Tambah Blog"
        ]);
    }

    public function store(Request $request)
    {
        Blog::create([
            'judul' => request('judul'),
            'keterangan' => request('keterangan'),
            'foto' => request('foto')->store('images')
            ]);

        return redirect()->route('blog')->with('success', 'Sertifikat Telah Diupload');
    }

    public function show($id){
        
        $post = Blog::findOrFail($id);

        return view('show-blog', [
            "title" => "Blog | ".$post->judul,
            "post" => $post
        ]);
    }

    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        return view('edit-blog', [
            'title' => 'Ubah Blog',
            'post' => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = Blog::findOrFail($id);

        if($post->foto){
            \Storage::delete($post->foto);
        }

        $post->update([
            'judul' => request('judul'),
            'keterangan' => request('keterangan'),
            'foto' => request('foto')->store('images')
        ]);

        return redirect()->route('blog')->with('success', 'Blog Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $post = Blog::findOrFail($id);

        $post->delete();
        return redirect()->route('blog')->with('success', 'Blog Berhasil Dihapus');
    }

    public function trash(){

        $posts = Blog::onlyTrashed()->get();

        return view('trash-blog', [
            'title' => 'Trash',
            'posts' => $posts
        ]);	
    }

    public function restore($id){

        $posts = Blog::onlyTrashed()->findOrFail($id);
        $posts->restore();

        return redirect()->back();
    }
}
