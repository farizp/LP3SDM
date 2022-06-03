@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>

        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div align="right">
            <a href="{{ url('/data') }}" class="btn btn-danger"><span class=""
                    data-feather="corner-up-left" style="margin-bottom : 2px"></span> Back</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-sm" width="100%" cellspacing="0" id="dataPeserta">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">No.Telp/HP/WA</th>
                    <th scope="col">Golongan</th>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Alamat Sekolah</th>
                    <th scope="col">Kelas Yang Diajar</th>
                    <th scope="col">Kurikulum Yang Dipakai</th>
                    <th scope="col">Mata Pelajaran Yang Diajar</th>
                    <th scope="col">Nama Kepala Sekolah</th>
                    <th scope="col">NIP Kepala Sekolah</th>
                    <th scope="col">Koordinator PKB</th>
                    <th scope="col">NIP Koordinator PKB</th>
                    <th scope="col">Kualifikasi Pendidikan</th>
                    <th scope="col">Nama Pelatihan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $postData)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $postData -> nama }}</td>
                      <td>{{ $postData -> nip }}</td>
                      <td>{{ $postData -> telp }}</td>
                      <td>{{ $postData -> golongan }}</td>
                      <td>{{ $postData -> nama_sekolah }}</td>
                      <td>{{ $postData -> alamat_sekolah }}</td>
                      <td>{{ $postData -> kelas }}</td>
                      <td>{{ $postData -> kurikulum }}</td>
                      <td>{{ $postData -> mapel }}</td>
                      <td>{{ $postData -> nama_kepsek }}</td>
                      <td>{{ $postData -> nip_kepsek }}</td>
                      <td>{{ $postData -> pkb }}</td>
                      <td>{{ $postData -> nip_pkb }}</td>
                      <td>{{ $postData -> pendidikan }}</td>
                      <td>{{ $postData -> nama_pelatihan }}</td>
                      <td>
                        <a href="{{ route('peserta-pelatihan.restore', $postData->id) }}" class="badge bg-success"
                            onclick="return confirm('Apakah Jadwal Ingin Di Aktifkan Lagi?')"><span
                                data-feather="power"></span></a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </main>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#dataBlog').DataTable();
        });
    </script>
@endpush
