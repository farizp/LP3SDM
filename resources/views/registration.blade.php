@extends('layout/main')

@section('container')


    <div class="centerbox">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-5 mb-5">
                <main class="form-register">
                    <h1 class="h3 f2-normal text-center">Pendaftaran Program Keprofesian Berkelanjutan</h1>
                    <div class="text-center">
                        <i class="bi bi-file-earmark-text" style="font-size:150px"></i>

                    </div>
                    <hr>

                    <form action="{{ route('registration.store') }}" method="post">
                        @csrf

                        {{-- @method('PUT') --}}

                        <div class="form-floating mb-3">
                            <select class="form-select" id="pelatihan" name="pelatihan_id">
                                <option selected>Pilih Nama Pelatihan</option>
                                @if ($pelatihan->count() > 0)
                                    @foreach ($pelatihan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_pelatihan }}</option>
                                    @endforeach
                                @endif

                            </select>
                            <label for="pelatihan">Nama Pelatihan</label>
                            @error('pelatihan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div id="showData">
                            <div class="card">
                                <div class="card-body">
                                    <label for="">Narasumber</label>
                                    <input type="text" id="data_narasumber" readonly>

                                    <label for="">Tempat</label>
                                    <input type="text" id="data_tempat" readonly>

                                    <label for="">Tanggal</label>
                                    <input type="text" id="data_tanggal" readonly>

                                    <label for="">Hari</label>
                                    <input type="text" id="data_hari" readonly>

                                </div>
                            </div>
                        </div>

                        <hr>
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
                            <label for="nip">NIP Peserta</label>
                            @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="number" class="form-control  @error('telp') is-invalid @enderror" name="telp"
                                id="telp" placeholder="Masukkan No.Telp/HP/WA" required value="{{ old('nip') }}">
                            <label for="telp">Masukkan No.Telp/HP/WA</label>
                            @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <select class="form-select" @error('golongan') is-invalid @enderror" name="golongan"
                                id="golongan" aria-label="Pilih Golongan" required value="{{ old('golongan') }}">
                                <option value=>Golongan</option>
                                <option value="I-A">I-A</option>
                                <option value="II-B">II-B</option>
                                <option value="III-C">III-C</option>
                                <option value="IV-D">IV-D</option>
                            </select>
                            <label for="golongan">Pilih</label>
                            @error('golongan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div><br>

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
                            <input type="text" class="form-control  @error('kelas') is-invalid @enderror" name="kelas"
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

                        <hr>

                        <div class="form-floating">
                            <h4>Kualifikasi Pendidikan</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="SMA">
                                <label class="form-check-label" for="pendidikan">
                                    SMA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="D2">
                                <label class="form-check-label" for="pendidikan">
                                    D2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="S1">
                                <label class="form-check-label" for="pendidikan">
                                    S1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="S2">
                                <label class="form-check-label" for="pendidikan">
                                    S2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="S3">
                                <label class="form-check-label" for="pendidikan">
                                    S3
                                </label>
                            </div>
                            @error('pendidikan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div><br>

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
                                name="nip_kepsek" id="nip_kepsek" placeholder="NIP Peserta" required
                                value="{{ old('nip_kepsek') }}">
                            <label for="floatingInput">NIP Peserta</label>
                            @error('nip_kepsek')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('pkb') is-invalid @enderror" name="pkb" id="pkb"
                                placeholder="NIP Peserta" required value="{{ old('pkb') }}">
                            <label for="floatingInput">Koordinator PKB (Program Keprofesian Berkelanjutan)</label>
                            @error('pkb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control  @error('nip_pkb') is-invalid @enderror" name="nip_pkb"
                                id="nip_pkb" placeholder="NIP Peserta" required value="{{ old('nip_pkb') }}">
                            <label for="floatingInput">NIP Peserta</label>
                            @error('nip_pkb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <hr>


                        <button class="w-100 btn btn-lg btn-secondary " type="submit">Daftar Pelatihan</button>
                    </form>

            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        $('#pelatihan').on('change', function(e) {
            var pelatihan_id = e.target.value;
            $.ajax({
                url: '/data-pelatihan',
                method: 'GET',
                data: {
                    pelatihan_id: pelatihan_id
                },
                success: function(data) {
                    console.log(data);
                    $('#data_narasumber').val(data.narasumber);
                    $('#data_tempat').val(data.tempat);
                    $('#data_tanggal').val(data.tanggal);
                    $('#data_hari').val(data.hari);
                }
            })
        });
    </script>
@endpush
