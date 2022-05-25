@extends('layout.main-dashboard')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5 mb-5">
            <main class="form-register">
                <h1 class="h3 f2-normal text-center">Tambah Artikel</h1>
                <div class="text-center">
                    <i class="bi bi-card-text" style="font-size:150px"></i>
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
                        <textarea class="form-control" name="keterangan" id="keterangan" required rows="3"
                        value="{{ old('keterangan') }}"></textarea>
                        {{-- <textarea name="keterangan" rows="5" class="form-control" id="keterangan" placeholder="Masukkan Keterangan"
                            required value="{{ old('keterangan') }}"></textarea> --}}
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
                        <input type="file" class="form-control-file" name="foto" required>
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Tambah</button>
                </form>

            </main>
        </div>
    </div>

    
@endsection

@push('script')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'keterangan');
</script>
@endpush