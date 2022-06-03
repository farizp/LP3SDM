@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>

        </div>

        <div align="right">
            <a href="{{ route('data-peserta') }}" class="btn btn-danger"><span class="" data-feather="corner-up-left"
                    style="margin-bottom : 2px"></span> Back</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped" width="100%" cellspacing="0" id="dataPeserta">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Level</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $users)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->nip }}</td>
                            <td>{{ $users->level }}</td>
                            <td>{{ $users->email }}</td>
                            <td>
                                <a href="{{ route('akun.restore', $users->id) }}" class="badge bg-success"
                                    onclick="return confirm('Apakah Akun Ingin Di Aktifkan Lagi?')"><span
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
