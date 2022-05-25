<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
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
                    <a class="nav-link {{ $title === 'Artikel' ? 'active' : '' }}"
                        href="{{ route('blog-home') }}">Artikel</a>
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
                                        &nbsp; <i class="bi bi-person"></i> Profile</a>
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
