@extends('layout/main')

@section('container')

    <div class="container">
        @foreach ($blog as $item)
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('storage/'.$item->foto) }}" class="card-img-top" alt="...">
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

@endsection