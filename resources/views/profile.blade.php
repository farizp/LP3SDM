@extends('layout/main')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Profile</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        @if ($sertifikat->count() > 0)
                            <p class="card-text">Nama : {{ $user->name }}</p>
                            <p class="card-text">Email : {{ $user->email }}</p>
                            <p class="card-text">NIP : {{ $sertifikat[0]->nip }}</p>
                            <p class="card-text">No Telepon : {{ $sertifikat[0]->telp }}</p>
                            <p class="card-text">Pelatihan : 
                                @if ($sertifikat[0]->nama_pelatihan == null)
                                Belum ada pelatihan
                                @else
                                {{ $sertifikat[0]->nama_pelatihan }}
                                @endif
                            </p>
                            <p class="card-text">Sertifikat : 
                                @if ($sertifikat[0]->foto_sertifikat == null)
                                    Belum ada sertifikat
                                @else
                                <img src="{{ asset('storage/'.$sertifikat[0]->foto_sertifikat) }}" alt="" height="128">
                                    <br><br>
                                    <a href="{{ asset('storage/'.$sertifikat[0]->foto_sertifikat) }}" class="btn btn-success" download="">Download Sertifikat</a>
                                    @endif
                                </p>
                        @endif

                    </div>
                </div>
            </div>
        </div>

@endsection