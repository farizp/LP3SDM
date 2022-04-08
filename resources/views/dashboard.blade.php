@extends('layout/main-dashboard')

@section('container')


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>
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

        <div align="right">
            <a href="{{ route('tambah-blog') }}" class="btn btn-success"><span class=""
                    data-feather="plus" style="margin-bottom : 2px"></span> Tambah Blog</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-sm" width="100%" cellspacing="0" id="dataBlog">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $post->judul }}</td>
                          <td>{{ $post->keterangan }}</td>
                          <td>
                              <img src="{{ asset('storage/'.$post->foto) }}" width="128px" alt="" srcset="">
                          </td>
                          <td>
                              <a href="{{ route('edit-blog', $post->id) }}" class="badge bg-warning"><span
                                      data-feather="edit"></span></a>
                              <a href="{{ route('delete-blog', $post->id) }}" class="badge bg-danger" onclick="return confirm('Apakah Blog Ingin Di Hapus?')"><span
                                      data-feather="x-circle"></span></a>
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
        $(document).ready(function () {
            $('#dataBlog').DataTable();
        });
    </script>
    
@endpush