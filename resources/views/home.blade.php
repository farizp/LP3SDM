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
        <h3 align="center">Berita Pelatihan</h3>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            @foreach ($blog as $item)
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('storage/'.$item->foto) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text">
                        {{ Str::limit($item->keterangan, 200) }} 
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
        @endforeach
            
            </div>
          </div>
          
          <div class="load-more mt-5" align="center">
              <a href="{{ route('blog') }}" class="btn btn-primary" style="text-decoration: none">Load More</a>
          </div>

        <hr class="featurette-divider">

    </div>

@endsection
