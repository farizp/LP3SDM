@extends('layout/main-dashboard')

@section('container')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Pendaftaran Peserta Penelitian</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2 align-right">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
    @endif
    <div align="right">
      <a href="{{ route('peserta-pelatihan.trash') }}" class="btn btn-danger"><span class="" data-feather="power"
          style="margin-bottom : 2px"></span> Sertifikat Nonaktif</a>
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
          @foreach ($postsData as $postData)
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
                <a href="{{ route('peserta.delete', $postData->id) }}" class="badge bg-danger"
                  onclick="return confirm('Apakah Peserta Ini Ingin Di Nonaktifkan?')"><span
                      data-feather="power"></span></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </main>
</div>
@endsection
   
@push('script')
  <script>
    $(document).ready(function() {
      $('#dataPeserta').DataTable();
    });
  </script>
    
@endpush