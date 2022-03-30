<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\PostData;
use App\Models\User;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsData = PostData::join('pelatihans', 'post_data.pelatihan_id', '=', 'pelatihans.id')->get();

        return view('data', [
            'title' => 'Data Pendaftaran Peserta',
            'postsData' => $postsData
        ]);
    }

    public function dataPeserta()
    {
        return view('data-peserta', [
            'title' => 'Data Peserta',
            'user' => User::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-akun', [
            'title' => 'Data Pendaftaran Peserta',
            'postsData' => PostData::all()
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nip' => 'required|min:10|max:15|unique:users',
            'level' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Pendaftaran Berhasil, Silahkan Masuk!');

        return redirect()->route('data-peserta')->with('success', 'Pendaftaran Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit', [
            'title' => 'Edit',
            'post' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => request('name'),
            'nip' => request('nip'),
            'email' => request('email'),
        ]);

        return redirect()->route('data-peserta')->with('success', 'Pos Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/data-peserta')->with('success', 'Data Telah Dihapus!');
    }
}
