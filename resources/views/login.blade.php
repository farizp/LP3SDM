@extends('layout/main')

@section('container')
    

  <div class="row justify-content-center">
    <div class="col-lg-5 mt-5 mb-5">

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <main class="form-signin">
        <h1 class="h3 f2-normal text-center">Masuk</h1> 
        <div class="text-center">
          <i class="bi bi-person-square text-center" style="font-size:150px"></i>
        </div> 

        <form action="/login" method="post">
          @csrf

          <div class="form-floating">
            <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" placeholder="Masukkan NIP" autofocus required value="{{ old ('nip')}}">
            <label for="nip">NIP</label>
            @error('nip')
                <div class="invalid-feedback">
                  {{ message }}
                </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
            <label for="password">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-secondary" type="submit">Masuk</button>
      </form>
      <small class="d-block text-center mt-2">Tidak Punya Akun? <a href="/register">Daftar</a></small>
    </div>
  </div>
  
</main>
@endsection

