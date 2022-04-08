@extends('layout/main-dashboard')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5 mb-5">
            <main class="form-register">
                <h1 class="h3 f2-normal text-center">Tambah Jadwal</h1>
                <div class="text-center">
                    <i class="bi bi-person-plus" style="font-size:150px"></i>
                </div>
                <form action="{{ route('post-jadwal') }}" method="post">
                    @csrf

                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('nama_pelatihan') is-invalid @enderror" name="nama_pelatihan"
                            id="nama_pelatihan" placeholder="Masukkan Nama Pelatihan" required>
                        <label for="floatingInput">Nama Pelatihan</label>
                        @error('nama_pelatihan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control  @error('narasumber') is-invalid @enderror" name="narasumber" id="narasumber" placeholder="Masukkan Narasumber" required>
                        <label for="floatingInput">Narasumber</label>
                        @error('narasumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control  @error('tempat') is-invalid @enderror" name="tempat" id="tempat" placeholder="Masukkan Tempat" required>
                        <label for="floatingInput">Tempat</label>
                        @error('tempat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="date" class="form-control  @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal" required>
                        <label for="floatingInput">Tanggal</label>
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <select class="form-select" @error('hari') is-invalid @enderror" name="hari"
                            id="hari" aria-label="Pilih hari" aria-placeholder="Pilih Hari" required>
                            <option value="">Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                        <label for="hari">Pilih</label>
                        @error('pendidikan')
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
