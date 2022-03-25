@extends('layout/main-dashboard')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5 mb-5">
            <main class="form-register">
                <h1 class="h3 f2-normal text-center">Ubah Data Akun</h1>
                <div class="text-center">
                    <i class="bi bi-person-plus" style="font-size:150px"></i>
                </div>
                <form action="{{ route('edit-datapeserta.update', $post->id) }}" method="post">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name"
                            id="name" required value="{{ $post->name }}">
                        <label for="floatingInput">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control  @error('nip') is-invalid @enderror" name="nip" id="nip"
                            required value="{{ $post->nip }}">
                        <label for="floatingInput">NIP</label>
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <input type="hidden" name="level" value="Guru">

                    <div class="form-floating">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                            id="email" required value="{{ $post->email }}">
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Ubah</button>
                </form>
            </main>
        </div>
    </div>

@endsection
