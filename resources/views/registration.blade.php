@extends('layout/main')

@section('container')

    <link rel="stylesheet" href="css/registration.css">

    <div class="centerbox">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-5 mb-5">
                <main class="form-register">
                    <h1 class="h3 f2-normal text-center">Pendaftaran Peserta Penelitian</h1>
                    <div class="text-center">
                        <i class="bi bi-file-earmark-text" style="font-size:150px"></i>

                    </div>
                    <hr>

                    <form action="{{ route('registration.store') }}" method="post">
                        @csrf

                        {{-- @method('PUT') --}}

                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror"
                                name="nama" id="name" value="{{ Auth::user()->name }}" required
                                value="{{ old('name') }}" readonly>
                            <label for="nama">Nama</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('nip') is-invalid @enderror" name="nip" id="nip"
                                placeholder="Masukkan NIP" required value="{{ Auth::user()->nip }}" readonly>
                            <label for="nip">NIP</label>
                            @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <input type="number" class="form-control  @error('telp') is-invalid @enderror" name="telp" id="telp"
                            placeholder="Masukkan No.Telp/HP/WA" required value="{{ old('nip') }}">
                        <div class="form-floating">
                            <label for="telp">Masukkan No.Telp/HP/WA</label>
                            @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="number" class="form-control  @error('golongan') is-invalid @enderror"
                                name="golongan" id="golongan" placeholder="Masukkan Golongan" required
                                value="{{ old('golongan') }}">
                            <label for="floatingInput">Golongan</label>
                            @error('golongan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('nama_sekolah') is-invalid @enderror"
                                name="nama_sekolah" id="nama_sekolah" placeholder="Masukkan Nama Sekolah" required
                                value="{{ old('nama_sekolah') }}">
                            <label for="floatingInput">Nama Sekolah</label>
                            @error('nama_sekolah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('alamat_sekolah') is-invalid @enderror"
                                name="alamat_sekolah" id="alamat_sekolah" placeholder="Masukkan Alamat Sekolah" required
                                value="{{ old('alamat_sekolah') }}">
                            <label for="floatingInput">Alamat Sekolah</label>
                            @error('alamat_sekolah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="number" class="form-control  @error('kelas') is-invalid @enderror" name="kelas"
                                id="kelas" placeholder="Masukkan Kelas" required value="{{ old('kelas') }}">
                            <label for="floatingInput">Kelas</label>
                            @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="number" class="form-control  @error('kurikulum') is-invalid @enderror"
                                name="kurikulum" id="kurikulum" placeholder="Masukkan Kukikulum" required
                                value="{{ old('kurikulum') }}">
                            <label for="floatingInput">Kukikulum</label>
                            @error('kurikulum')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('mapel') is-invalid @enderror" name="mapel"
                                id="mapel" placeholder="Masukkan Mata Pelajaran" required value="{{ old('mapel') }}">
                            <label for="floatingInput">Mata Pelajaran</label>
                            @error('mapel')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('nama_kepsek') is-invalid @enderror"
                                name="nama_kepsek" id="nama_kepsek" placeholder="Masukkan Nama Kepala Sekolah" required
                                value="{{ old('nama_kepsek') }}">
                            <label for="floatingInput">Nama Kepala Sekolah</label>
                            @error('nama_kepsek')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('nip_kepsek') is-invalid @enderror"
                                name="nip_kepsek" id="nip_kepsek" placeholder="Masukkan NIP Kepala Sekolah" required
                                value="{{ old('nip_kepsek') }}">
                            <label for="floatingInput">NIP Kepala Sekolah</label>
                            @error('nip_kepsek')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('pkb') is-invalid @enderror" name="pkb" id="pkb"
                                placeholder="Masukkan Koordinator PKB" required value="{{ old('pkb') }}">
                            <label for="floatingInput">Koordinator PKB</label>
                            @error('pkb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('nip_pkb') is-invalid @enderror" name="nip_pkb"
                                id="nip_pkb" placeholder="Masukkan NIP PKB" required value="{{ old('nip_pkb') }}">
                            <label for="floatingInput">NIP PKB</label>
                            @error('nip_pkb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-floating">
                            <select class="form-select" @error('pendidikan') is-invalid @enderror" name="pendidikan"
                                id="pendidikan" aria-label="Pilih Pendidikan" required value="{{ old('pendidikan') }}">
                                <option value=>Kualifikasi Pendidikan</option>
                                <option value="SMA">SMA</option>
                                <option value="D2">D2</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            <label for="pendidikan">Pilih</label>
                            @error('pendidikan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div><br>

                        <hr>


                        <button class="w-100 btn btn-lg btn-secondary " type="submit">Daftar</button>
                    </form>
                    <small class="d-block text-center mt-2">Sudah Punya Akun? <a href="/login">Masuk</a></small>
            </div>
        </div>
    </div>

@endsection