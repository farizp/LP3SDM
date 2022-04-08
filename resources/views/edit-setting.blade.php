@extends('layout/main-dashboard')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5 mt-5 mb-5">
        <main class="form-register">
            <h1 class="h3 f2-normal text-center">Update Banner</h1>
            <div class="text-center">
                <i class="bi bi-person-plus" style="font-size:150px"></i>
            </div>
            <form action="{{ route('update-setting', $setting->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="">Title 1</label>
                    <input type="text" class="form-control" name="title1" value="{{ $setting->title1 }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="">Description 1</label>
                    <input type="text" class="form-control" name="desc1" value="{{ $setting->desc1 }}">
                    @error('desc1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="">Banner 1</label>
                {{-- <img src="{{ asset(auth()->user()->images) }}" alt="" height="128"> --}}
                    <input type="file" class="form-control-file" name="image1" value="{{ $setting->title2 }}">
                    @error('image1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <hr>

                <div class="form-group">
                    <label for="">Title 2</label>
                    <input type="text" class="form-control" name="title2" value="{{ $setting->desc2 }}">
                    @error('title2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="">Description 2</label>
                    <input type="text" class="form-control" name="desc2">
                    @error('desc2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="">Banner 2</label>
                {{-- <img src="{{ asset(auth()->user()->images) }}" alt="" height="128"> --}}
                    <input type="file" class="form-control-file" name="image2">
                    @error('image2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <hr>

                <div class="form-group">
                    <label for="">Title 3</label>
                    <input type="text" class="form-control" name="title3" value="{{ $setting->title3 }}">
                    @error('title3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="">Description 3</label>
                    <input type="text" class="form-control" name="desc3" value="{{ $setting->desc3 }}">
                    @error('desc3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="">Banner 3</label>
                {{-- <img src="{{ asset(auth()->user()->images) }}" alt="" height="128"> --}}
                    <input type="file" class="form-control-file" name="image3">
                    @error('image3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Update Banner</button>
            </form>
        </main>
    </div>
</div>


@endsection