@extends('layout/main-dashboard')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5 mt-5 mb-5">
        <main class="form-register">
            <h1 class="h3 f2-normal text-center">Unggah Sertifikat</h1>
            <div class="text-center">
                <i class="bi bi-person-plus" style="font-size:150px"></i>
            </div>
            <form action="{{ route('update-sertifikat', $sertifikat->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name="nama_pelatihan">
                        <option selected>Pilih Nama Pelatihan</option>
                        @foreach ($pelatihan as $post)
                            <option value="{{ $post->nama_pelatihan }}">{{ $post->nama_pelatihan }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Nama Pelatihan</label>
                </div>

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name="name">
                        <option selected>Pilih Nama Peserta</option>
                        @foreach ($postData as $post)
                            <option value="{{ $post->nama }}">{{ $post->nama }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Nama Peserta</label>
                </div>

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name="nip">
                        <option selected>Pilih NIP Peserta</option>
                        @foreach ($postData as $post)
                            <option value="{{ $post->nip }}">{{ $post->nip }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">NIP</label>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Foto Sertifikat</label>
                {{-- <img src="{{ asset(auth()->user()->images) }}" alt="" height="128"> --}}
                    <input type="file" class="form-control-file" name="foto_sertifikat">
                    @error('foto_sertifikat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Update Sertifikat</button>
            </form>
        </main>
    </div>
</div>

@endsection