@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Pelatihan</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div align="right">
            <a href="{{ route('jadwal.trash') }}" class="btn btn-danger"><span class="" data-feather="power"
                style="margin-bottom : 2px"></span> Pelatihan Nonaktif</a>
            <a href="{{ route('tambah-jadwal') }}" class="btn btn-success"><span class="" data-feather="plus"
                    style="margin-bottom : 2px"></span> Buat Pelatihan</a>
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
                                <a href="{{ route('edit-jadwal', $post->id) }}" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>
                                <a href="{{ route('delete-jadwal', $post->id) }}" class="badge bg-danger"
                                    onclick="return confirm('Apakah Jadwal Ini Ingin Di Nonaktifkan?')"><span
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
            $('#dataJadwal').DataTable();
        });
    </script>
@endpush
