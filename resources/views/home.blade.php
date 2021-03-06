@extends('layout/main')

@section('container')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                @if (!empty($setting[0]->image1))
                    <img src="{{ asset('storage/' . $setting[0]->image1) }}" alt="" class="img-fluid">
                @else
                    <img src="img/seminarKTI.jpg" class="bd-placeholder-img"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                @endif

                <div class="container">
                    <div class="carousel-caption text-start">
                        @if (!empty($setting[0]->title1))
                            <h1 style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                                {{ $setting[0]->title1 }}</h1>
                        @endif
                        @if (!empty($setting[0]->desc1))
                            <p style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                                {{ $setting[0]->desc1 }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                @if (!empty($setting[0]->image2))
                    <img src="{{ asset('storage/' . $setting[0]->image2) }}" alt="" class="img-fluid">
                @else
                    <img src="img/seminarKTI.jpg" class="bd-placeholder-img"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                @endif

                <div class="container">
                    <div class="carousel-caption text-start">
                        @if (!empty($setting[0]->title2))
                            <h1 style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                                {{ $setting[0]->title2 }}</h1>
                        @endif
                        @if (!empty($setting[0]->desc2))
                            <p style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                                {{ $setting[0]->desc2 }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                @if (!empty($setting[0]->image3))
                    <img src="{{ asset('storage/' . $setting[0]->image3) }}" alt="" class="img-fluid">
                @else
                    <img src="img/seminarKTI.jpg" class="bd-placeholder-img"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                @endif

                <div class="container">
                    <div class="carousel-caption text-start">
                        @if (!empty($setting[0]->title3))
                            <h1 style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                                {{ $setting[0]->title3 }}</h1>
                        @endif
                        @if (!empty($setting[0]->desc3))
                            <p style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                                {{ $setting[0]->desc3 }}</p>
                        @endif
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
                        <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text">
                                {!! Str::limit($item->keterangan, 200) !!}
                            </p>

                            <a href="{{ route('show-blog', $item->id) }}" class="btn btn-primary">Lanjut Baca</a>
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
        <a href="{{ route('blog-home') }}" class="btn btn-primary" style="text-decoration: none">Lebih Banyak</a>
    </div>

    <hr class="featurette-divider">

    </div>
@endsection
