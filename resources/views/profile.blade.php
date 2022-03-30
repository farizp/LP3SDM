@extends('layout/main')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Profile</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">Nama : {{ $user->name }}</p>
                        <p class="card-text">Email : {{ $user->email }}</p>

                    </div>
                </div>
            </div>
        </div>

@endsection