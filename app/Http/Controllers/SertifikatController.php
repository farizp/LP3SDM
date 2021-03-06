<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use App\Models\Pelatihan;
use App\Models\PostData;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertifikat = Sertifikat::join('pelatihans', 'sertifikats.pelatihan_id', '=', 'pelatihans.id')
            ->join('post_data', 'sertifikats.peserta_id', '=', 'post_data.id')
            ->get();

        return view('/data-sertifikat', [
            'title' => 'Data Sertifikat',
            'sertifikat' => $sertifikat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelatihan = Pelatihan::all();
        $postData = PostData::all();

        return view('/sertifikat', [
            'title' => 'Tambah Sertifikat',
            'pelatihan' => $pelatihan,
            'postData' => $postData
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
        Sertifikat::create([
            'pelatihan_id' => request('pelatihan_id'),
            'peserta_id' => request('peserta_id'),
            'foto_sertifikat' => request('foto_sertifikat')->store('images')
        ]);

        return redirect()->route('data-sertifikat')->with('success', 'Sertifikat Telah Diupload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        $pelatihan = Pelatihan::all();
        $postData = PostData::all();

        return view('edit-sertifikat', [
            'title' => 'Edit Sertifikat',
            'sertifikat' => $sertifikat,
            'pelatihan' => $pelatihan,
            'postData' => $postData
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sertifikat = Sertifikat::findOrFail($id);

        $sertifikat->update([
            'pelatihan_id' => request('pelatihan_id'),
            'peserta_id' => request('peserta_id'),
            'foto_sertifikat' => request('foto_sertifikat')->store('images')
        ]);

        return redirect()->route('data-sertifikat')->with('success', 'Sertifikat Telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        $sertifikat->delete();

        return redirect()->route('data-sertifikat')->with('success', 'Sertifikat Telah Dinonaktifkan');
    }

    public function trash()
    {
        $sertifikat = Sertifikat::onlyTrashed()
            ->join('pelatihans', 'sertifikats.pelatihan_id', '=', 'pelatihans.id')
            ->join('post_data', 'sertifikats.peserta_id', '=', 'post_data.id')
            ->get();

        return view('trash-sertifikat', [
            'title' => 'Trash',
            'sertifikat' => $sertifikat
        ]);
    }

    public function restore($id)
    {
        $sertifikat = Sertifikat::onlyTrashed()->findOrFail($id);
        $sertifikat->restore();

        return redirect()->back()->with('success', 'Sertifikat berhasil diaktifkan!');
    }
}
