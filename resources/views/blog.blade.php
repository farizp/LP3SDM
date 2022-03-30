@extends('layout/main')

@section('container')

    <div class="container">
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

@endsection