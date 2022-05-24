@extends('layout/main-dashboard')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5 mb-5">
            <main class="form-register">
                <h1 class="h3 f2-normal text-center">Ubah Banner</h1>
                <div class="text-center" style="font-size:150px">
                    <i class="bi bi-images" style="font-size:150px"></i>
                </div>
                <form action="{{ route('update-setting', $setting->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <label for="">Judul 1</label>
                        <input type="text" class="form-control" name="title1" value="{{ $setting->title1 }}" required>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="">Keterangan 1</label>
                        <input type="text" class="form-control" name="desc1" value="{{ $setting->desc1 }}" required>
                        @error('desc1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="">Foto 1</label>
                        {{-- <img src="{{ asset(auth()->user()->images) }}" alt="" height="128"> --}}
                        <input type="file" class="form-control-file" name="image1" value="{{ $setting->title2 }}"
                            required>
                        @error('image1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="form-group">
                        <label for="">Judul 2</label>
                        <input type="text" class="form-control" name="title2" value="{{ $setting->desc2 }}" required>
                        @error('title2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="">Keterangan 2</label>
                        <input type="text" class="form-control" name="desc2" required>
                        @error('desc2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="">Foto 2</label>
                        {{-- <img src="{{ asset(auth()->user()->images) }}" alt="" height="128"> --}}
                        <input type="file" class="form-control-file" name="image2" required>
                        @error('image2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="form-group">
                        <label for="">Judul 3</label>
                        <input type="text" class="form-control" name="title3" value="{{ $setting->title3 }}" required>
                        @error('title3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="">Keterangan 3</label>
                        <input type="text" class="form-control" name="desc3" value="{{ $setting->desc3 }}" required>
                        @error('desc3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="">Foto 3</label>
                        <input type="file" class="form-control-file" name="image3" required>
                        @error('image3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Ubah Banner</button>
                </form>
            </main>
        </div>
    </div>
@endsection
