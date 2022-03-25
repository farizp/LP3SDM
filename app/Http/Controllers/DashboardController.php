<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard', [
            "title" => "Blog",
            "posts" => Blog::all()
        ]);
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

    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        return view('edit-blog', [
            'title' => 'Edit',
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
        
        if($post->foto){
            \Storage::delete($post->foto);
        }

        $post->delete();
        return redirect()->route('blog')->with('success', 'Blog Berhasil Dihapus');
    }
}
