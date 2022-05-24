@extends('layout/main')

@section('container')
    <div class="container">
        <div class="content-center mt-5 mb-5" style="margin-top: 50px;">
            <div class="text-center">
                <img src="{{ asset('storage/' . $post->foto) }}" class="img-fluid" alt="..." height="50%" width="50%" style="margin-top: 50px;">
              </div>
            
            <br>
            <hr>
            <br>
            <h4>{{ $post->judul }}</h4>
            <p>
                {!! $post->keterangan !!}
            </p>
            <br>
            <hr>
        </div>
    </div>
@endsection
