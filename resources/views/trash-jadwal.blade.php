@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>

        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div align="right">
            <a href="{{ route('jadwal') }}" class="btn btn-danger"><span class=""
                    data-feather="corner-up-left" style="margin-bottom : 2px"></span> Back</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-sm" width="100%" cellspacing="0" id="dataJadwal">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelatihan</th>
                        <th scope="col">Narasumber</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->nama_pelatihan }}</td>
                            <td>{{ $post->narasumber }}</td>
                            <td>{{ $post->tempat }}</td>
                            <td>{{ $post->tanggal }}</td>
                            <td>{{ $post->hari }}</td>
                            <td>
                                <a href="{{ route('jadwal.restore', $post->id) }}" class="badge bg-success"
                                    onclick="return confirm('Apakah Jadwal Ingin Di Aktifkan Lagi?')"><span
                                        data-feather="power"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#dataBlog').DataTable();
        });
    </script>
@endpush
