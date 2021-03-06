<?php

namespace App\Http\Controllers;

use App\Models\PostData;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostDataRequest;
use App\Http\Requests\UpdatePostDataRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Redirect;

class PostDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function registration()
    {

        $pelatihan = Pelatihan::all();

        return view('registration', [
            "title" => "Pendaftaran",
            'pelatihan' => $pelatihan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make(request()->all(), [
            'telp' => 'required|numeric|min:15',
            'golongan' => 'required|numeric',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'kelas' => 'required|numeric',
            'kurikulum' => 'required|numeric',
            'mapel' => 'required',
            'nama_kepsek' => 'required',
            'nip_kepsek' => 'required|numeric|min:15',
            'pkb' => 'required',
            'nip_pkb' => 'required|numeric|min:15',
            'pendidikan' => 'required'
        ]);
        // dd($validatedData);

        if ($validatedData->fails()) {
            dd($validatedData->errors());
            return back()->withErrors($validatedData->errors());
        } else {
            Alert::success('Success', 'Data Berhasil Diinput');
            $postData = new PostData();

            $postData->pelatihan_id = $request->pelatihan_id;
            $postData->nama = $request->nama;
            $postData->nip = $request->nip;
            $postData->telp = $request->telp;
            $postData->golongan = $request->golongan;
            $postData->nama_sekolah = $request->nama_sekolah;
            $postData->alamat_sekolah = $request->nama_sekolah;
            $postData->kelas = $request->kelas;
            $postData->kurikulum = $request->kurikulum;
            $postData->mapel = $request->mapel;
            $postData->nama_kepsek = $request->nama_kepsek;
            $postData->nip_kepsek = $request->nip_kepsek;
            $postData->pkb = $request->pkb;
            $postData->nip_pkb = $request->nip_pkb;
            $postData->pendidikan = $request->pendidikan;

            // dd($postData);
            $postData->save();
            return redirect()->back();
        }
        // dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostData  $postData
     * @return \Illuminate\Http\Response
     */
    public function show(PostData $postData)
    {
        return view('/registration', [
            'post' => $postData
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostData  $postData
     * @return \Illuminate\Http\Response
     */
    public function edit(PostData $postData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostDataRequest  $request
     * @param  \App\Models\PostData  $postData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostDataRequest $request, PostData $postData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostData  $postData
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostData::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Peserta Penelitian Berhasil Dinonaktifkan');
    }

    public function trash()
    {

        $posts = PostData::onlyTrashed()
            ->join('pelatihans', 'post_data.pelatihan_id', '=', 'pelatihans.id')
            ->get();

        return view('trash-peserta-penelitan', [
            'title' => 'Trash',
            'posts' => $posts
        ]);
    }

    public function restore($id)
    {

        $post = PostData::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->back()->with('success', 'Jadwal berhasil diaktifkan!');
    }
}
