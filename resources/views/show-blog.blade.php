@extends('layout/main')

@section('container')

    <div class="container">
        
        <div class="content mt-5 mb-5" style="margin-top: 50px;">
            <img src="{{ asset('storage/'.$post->foto) }}" class="img-fluid" alt="...">
            <br>
            <hr>
            <br>
            <h4>{{ $post->judul }}</h4>
            <p>
                {{ $post->keterangan }}
            </p>
        </div>

    </div>

@endsection