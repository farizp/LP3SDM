@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Sertifikat</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div align="right">
            <a href="{{ route('tambah-sertifikat') }}" class="btn btn-success"><span class=""
                    data-feather="plus" style="margin-bottom : 2px"></span> Unggah Sertifikat</a>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-sm" width="100%" cellspacing="0" id="dataSertifikat">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelatihan/Penelitian</th>
                        <th scope="col">Nama Peserta</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Sertifikat</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelatihan/Penelitian</th>
                        <th scope="col">Nama Peserta</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Sertifikat</th>
                        <th scope="col">Edit</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($sertifikat as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->nama_pelatihan }}</td>
                            <td>{{ $post->nama }}</td>
                            <td>{{ $post->nip }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$post->foto_sertifikat) }}" alt="" height="128">
                            </td>
                            <td>
                                <a href="{{ route('edit-sertifikat', $post->id) }}" class="btn btn-warning"><span
                                        class="" data-feather="edit" style="margin-bottom : 2px"></span> Edit</a>
                                <a href="{{ route('delete-sertifikat', $post->id) }}" class="btn btn-danger"><span
                                        class="" data-feather="trash" style="margin-bottom : 2px"></span> Hapus</a>
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
        $('#dataSertifikat').DataTable();
    });
</script>
@endpush