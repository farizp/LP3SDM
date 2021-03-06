<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Pelatihan::all();

        return view('jadwal', [
            "title" => "Jadwal",
            "posts" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-jadwal', [
            "title" => "Tambah Jadwal"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pelatihan::create([
            'nama_pelatihan' => request('nama_pelatihan'),
            'narasumber' => request('narasumber'),
            'tempat' => request('tempat'),
            'tanggal' => request('tanggal'),
            'hari' => request('hari')
        ]);
        return redirect()->route('jadwal')->with('success', 'Pos Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelatihan = Pelatihan::where('id', $id)->get();
    }

    public function getData(Request $request){

        $pelatihan = Pelatihan::where('id', $request->pelatihan_id)->first();
        return response()->json($pelatihan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelatihan $pelatihan, $id)
    {
        $post = Pelatihan::findOrFail($id);

        return view('edit-jadwal', [
            "title" => "Ubah Jadwal",
            "post" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Pelatihan::findOrFail($id);

        $post->update([
            'nama_pelatihan' => request('nama_pelatihan'),
            'narasumber' => request('narasumber'),
            'tempat' => request('tempat'),
            'tanggal' => request('tanggal'),
            'hari' => request('hari')
        ]);

        return redirect()->route('jadwal')->with('success', 'Pos Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Pelatihan::findOrFail($id);
        $post->delete();

        return redirect()->route('jadwal')->with('success', 'Jadwal Berhasil Dinonaktifkan');
    }

    public function trash(){

        $posts = Pelatihan::onlyTrashed()->get();

        return view('trash-jadwal', [
            'title' => 'Trash',
            'posts' => $posts
        ]);	
    }

    public function restore($id){

        $post = Pelatihan::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->back()->with('success', 'Jadwal berhasil diaktifkan!');
    }

}
