@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>

        </div>

        <div align="right">
            <a href="{{ route('blog') }}" class="btn btn-danger"><span class="" data-feather="corner-up-left"
                    style="margin-bottom : 2px"></span> Back</a>
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
                            <td>{!! $post->keterangan !!}</td>
                            <td>
                                <img src="{{ asset('storage/' . $post->foto) }}" width="128px" alt="" srcset="">
                            </td>
                            </td>
                            <td>
                                <a href="{{ route('blog.restore', $post->id) }}" class="badge bg-success"
                                    onclick="return confirm('Apakah Blog Ingin Di Aktifkan Lagi?')"><span
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
