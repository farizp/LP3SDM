@extends('layout.main-dashboard')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5 mb-5">
            <main class="form-register">
                <h1 class="h3 f2-normal text-center">Tambah Blog</h1>
                <div class="text-center">
                    <i class="bi bi-person-plus" style="font-size:150px"></i>
                </div>
                <form action="{{ route('post-blog') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('judul') is-invalid @enderror" name="judul"
                            id="judul" placeholder="Masukkan Judul" required value="{{ old('judul') }}">
                        <label for="floatingInput">Judul</label>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" rows="5" class="form-control" placeholder="Masukkan Keterangan"
                            required value="{{ old('keterangan') }}"></textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="">Foto</label>
                        {{-- <img src="{{ asset(auth()->user()->images) }}" alt="" height="128"> --}}
                        <input type="file" class="form-control-file" name="foto">
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Tambah</button>
                </form>

            </main>
        </div>
    </div>
@endsection
