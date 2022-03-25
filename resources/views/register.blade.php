@extends('layout/main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5 mb-5">
            <main class="form-register">
                <h1 class="h3 f2-normal text-center">Pendaftaran Akun</h1>
                <div class="text-center">
                    <i class="bi bi-person-plus" style="font-size:150px"></i>
                </div>
                <form action="/register" method="post">
                    @csrf

                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Masukkan Nama" required value="{{ old('name') }}">
                        <label for="floatingInput">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control  @error('nip') is-invalid @enderror" name="nip" id="nip"
                            placeholder="Masukkan NIP" required value="{{ old('nip') }}">
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
                            id="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Masukkan Password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Daftar</button>
                </form>
                <small class="d-block text-center mt-2">Sudah Punya Akun? <a href="/login">Masuk</a></small>

            </main>
        </div>
    </div>
@endsection
