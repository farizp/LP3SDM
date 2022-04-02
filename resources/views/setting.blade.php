@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Setting Banner</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @foreach ($setting as $item)
            <div class="row mt-5">
                <div class="col-md-4">
                    @if ($item->foto_banner == null)
                        <img src="{{ asset('storage/'.$item->image1) }}" class="img-fluid" alt="" srcset="">
                    @else
                        <img src="https://ptsse.co.id/assets/gambar_galeri/default.png" alt="" width="100%" height="200">
                    @endif
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="button-setting" style="margin-left: 30px;">
                        <h3>Edit Foto</h3>
                        <a href="{{ route('edit-setting', $item->id) }}" class="btn btn-warning">Edit Banner</a>
                    </div>
                </div>
            </div>
        @endforeach

@endsection