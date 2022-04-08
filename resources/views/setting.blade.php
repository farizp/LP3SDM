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

<div class="card">
    <div class="card-body">
        <div class="row mt-5">
            <div class="col-md-4">
                @if ($setting[0]->image1 == null)
                    <img src="https://ptsse.co.id/assets/gambar_galeri/default.png" alt="" width="100%" height="200">
                @else
                    <img src="{{ asset('storage/'.$setting[0]->image1) }}" class="img-fluid" alt="" srcset="">
                @endif
            </div>
            <div class="col-md-8 d-flex align-setting[0]s-center">
                <div class="button-setting" style="margin-left: 30px;">
                    <h6>{{ $setting[0]->title1 }}</h6>
                    <p>{{ $setting[0]->desc1 }}</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                @if ($setting[0]->image2 == null)
                    <img src="https://ptsse.co.id/assets/gambar_galeri/default.png" alt="" width="100%" height="200">
                @else
                    <img src="{{ asset('storage/'.$setting[0]->image2) }}" class="img-fluid" alt="" srcset="">
                @endif
            </div>
            <div class="col-md-8 d-flex align-setting[0]s-center">
                <div class="button-setting" style="margin-left: 30px;">
                    <h6>{{ $setting[0]->title2 }}</h6>
                    <p>{{ $setting[0]->desc2 }}</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                @if ($setting[0]->image3 == null)
                    <img src="https://ptsse.co.id/assets/gambar_galeri/default.png" alt="" width="100%" height="200">
                @else
                    <img src="{{ asset('storage/'.$setting[0]->image3) }}" class="img-fluid" alt="" srcset="">
                @endif
            </div>
            <div class="col-md-8 d-flex align-setting[0]s-center">
                <div class="button-setting" style="margin-left: 30px;">
                    <h6>{{ $setting[0]->title3 }}</h6>
                    <p>{{ $setting[0]->desc3 }}</p>
                </div>
            </div>
        </div>
        <div class="button-edit mt-3" align="right">
            <a href="{{ route('edit-setting', $setting[0]->id) }}" class="btn btn-warning">Edit Banner</a>
        </div>
    </div>
</div>

@endsection