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
                    <label for="">Banner</label>
                {{-- <img src="{{ asset(auth()->user()->images) }}" alt="" height="128"> --}}
                    <input type="file" class="form-control-file" name="image">
                    @error('image')
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