@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Akun</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2 align-right">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div align="right">
            <a href="{{ route('tambah-peserta') }}" class="btn btn-success"><span class=""
                    data-feather="plus" style="margin-bottom : 2px"></span> Tambah Admin</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm" width="100%" cellspacing="0" id="data-peserta">
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
                                <a href="{{ route('edit-datapeserta', $users->id) }}" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>
                                <a href="{{ route('delete-datapeserta', $users->id) }}" class="badge bg-danger" onclick="return confirm('Apakah Data Ingin Di Hapus?')"><span
                                        data-feather="x-circle"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    </div>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data-pesertaz').DataTable();
        });
    </script>
@endsection