@extends('layout/main')

@section('container')

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="height: 550px">
            <div class="carousel-item active">
                <img src="img/seminarKTI.jpg" class="bd-placeholder-img" width="100%" style="height: 550px"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                    focusable="false">

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class="bordertext">Seminar KTI</h1>
                        <p class="bordertext">Foto Bersama Diklat dan Seminar KTI Guru, Kepala Sekolah, dan Pengawas di
                            Kecamatan Kemiri, Kabupaten OKU Timur</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/seminarKTI2.jpg" class="bd-placeholder-img" width="100%" style="height: 550px"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                    focusable="false">

                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="bordertext">Seminar KTI Bulan September 2021</h1>
                        <p class="bordertext">Foto Peserta Diklat dan Seminar KTI Guru, Kepala Sekolah, dan Pengawas di
                            SDN Simpang Kepuh Kecamatan Madang, Suku I, Kabupaten OKU Timur</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/seminarKTI3.jpg" class="bd-placeholder-img" width="100%" style="height: 550px"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                    focusable="false">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1 class="bordertext">Seminar KTI</h1>
                        <p class="bordertext">Foto Bersama Diklat dan Seminar KTI Guru, Kepala Sekolah, dan Pengawas di
                            Kecamatan Kemiri, Kabupaten OKU Timur</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container-fluid marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Pemberian Materi oleh Staf Pengajar <br><span class="text-muted">(Dr.
                        Effendi Nawawi, M.Si)</span></h2>
                <p class="lead">Pemberian Materi Pembelajaran Abad 21 di SDN Karang Kemiri Kabupaten OKU Timur Tahun 2021</p>
            </div>
            <div class="col-md-5">
                <img src="img/seminar.jpg"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Peserta Kegiatan Program PKB</h2>
                <p class="lead">Peserta Program PKB di Kecamatan Madang Suku I, Mendapatkan Pelatihan dan Pengarahan dari Staff Pengajar Mengenai Pembelajaran Abad 21</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="img/seminar2.jpg"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Kegiatan Diklat Program PKB</h2>
                <p class="lead">Peserta Diklat di Kecamatan, Kabupaten OKU Timur Mendapatkan Pelatihan dan Pengarahan Tentang RPP HOTS</p>
            </div>
            <div class="col-md-5">
                <img src="img/seminar4.jpg"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
        </div>

        <hr class="featurette-divider">

    </div>

@endsection
