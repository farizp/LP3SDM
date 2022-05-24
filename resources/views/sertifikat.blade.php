@extends('layout/main-dashboard')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5 mb-5">
            <main class="form-register">
                <h1 class="h3 f2-normal text-center">Unggah Sertifikat</h1>
                <div class="text-center">
                    <i class="bi bi-card-heading" style="font-size:150px"></i>
                </div>
                <form action="{{ route('post-sertifikat') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" name="pelatihan_id" required>
                            <option selected>Pilih Nama Pelatihan</option>
                            @foreach ($pelatihan as $post)
                                <option value="{{ $post->id }}">{{ $post->nama_pelatihan }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Nama Pelatihan</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" name="peserta_id" required>
                            <option selected>Pilih Nama Peserta</option>
                            @foreach ($postData as $post)
                                <option value="{{ $post->id }}">{{ $post->nama }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Nama Peserta</label>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="">Foto Sertifikat</label>
                        <input type="file" class="form-control-file" name="foto_sertifikat" required>
                        @error('foto_sertifikat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Unggah Sertifikat</button>
                </form>
            </main>
        </div>
    </div>
@endsection
