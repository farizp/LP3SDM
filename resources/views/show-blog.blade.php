<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>LP3SDM | Sertifikat</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">LP3SDM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Beranda' ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Tentang' ? 'active' : '' }}" href="/about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Berita' ? 'active' : '' }}"
                            href="{{ route('blog-home') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Pendaftaran' ? 'active' : '' }}"
                            href="/registration">Pendaftaran</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->level == 'admin')
                                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('profile', auth()->user()->id) }}" class="nav-link text-dark">
                                            &nbsp; <i class="bi bi-person"></i> Sertifikat</a>
                                    </li>
                                @endif
                                <li>
                                    <form action="/" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                            Keluar</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link {{ $title === 'Masuk' ? 'active' : '' }}"
                                class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="mt-5 mb-5" style="margin-top: 50px;">
                    <br><br>
                    <h1>{{ $post->judul }}</h1>
                    
                    <img src="{{ asset('storage/' . $post->foto) }}" class="img-fluid" alt="..." height="100%" width="100%" style="margin-top: 20px;">
                    
                    <br>
                    <hr>
                    <br>
                    <i class="text-muted">{{ $post->created_at->diffForHumans() }}</i>
                    <p>
                        {!! $post->keterangan !!}
                    </p>
                    <br>
                    <hr>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow rounded card-list-berita">
                    <div class="card-body">
                        <h3>Berita Lainnya</h3>
                        @foreach ($blog as $item)
                            <a href="{{ route('show-blog', $item->id) }}" style="text-decoration: none;">
                                <span class="text-primary"><b>{{ $loop->iteration }}. {{ $item->judul }}</b></span><br>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="footer container mt-5">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2021 Jynnn&middot;
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    @include('sweetalert::alert')
    @stack('script')
</body>

</html>
