@extends('layout/main-dashboard')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card shadow rounded" style="border: none;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Pelatihan</h4>
                                <span>{{ $pelatihan }}</span>
                            </div>
                            <div class="col-md-6">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Feather-core-calendar.svg/1024px-Feather-core-calendar.svg.png" img="img-fluid" style="width: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow rounded" style="border: none;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Akun</h4>
                                <span>{{ $user }}</span>
                            </div>
                            <div class="col-md-6">
                                <img src="https://cdn-icons-png.flaticon.com/512/33/33308.png" img="img-fluid" style="width: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow rounded" style="border: none;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Peserta</h4>
                                <span>{{ $peserta }}</span>
                            </div>
                            <div class="col-md-6">
                                <img src="https://cdn-icons-png.flaticon.com/512/33/33887.png" img="img-fluid" style="width: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow rounded" style="border: none;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Sertifikat</h4>
                                <span>{{ $sertifikat }}</span>
                            </div>
                            <div class="col-md-6">
                                <img src="https://www.freeiconspng.com/thumbs/certificate-icon-png/certificate-icon-10.png" img="img-fluid" style="width: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
