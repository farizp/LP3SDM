@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Sertifikat</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div align="right">
            <a href="{{ route('tambah-sertifikat') }}" class="btn btn-success"><span class=""
                    data-feather="plus" style="margin-bottom : 2px"></span> Unggah Sertifikat</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm" width="100%" cellspacing="0" id="data-peserta">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelatihan/Penelitian</th>
                        <th scope="col">Nama Peserta</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Sertifikat</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($user as $users)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->nip }}</td>
                            <td>{{ $users->level }}</td>
                            <td>{{ $users->email }}</td>
                            <td>
                                <a href="{{ route('edit-datapeserta', $users->id) }}" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>
                                <a href="{{ route('delete-datapeserta', $users->id) }}" class="badge bg-danger" onclick="return confirm('Apakah Data Ingin Di Hapus?')"><span
                                        data-feather="x-circle"></span></a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </main>
@endsection