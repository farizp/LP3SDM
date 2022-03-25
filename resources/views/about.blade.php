@extends('layout/main')

@section('container')
    <div>
        <h2 class="text-center">
            Tentang<br>Lembaga Penelitian dan Evaluasi Indonesia
        </h2><br>

        <p class="text-center">
            "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste voluptatem cum ullam nostrum provident suscipit modi ea eos quas quod enim ut, a aliquid, repellendus quo at, dolorem ex quam in explicabo sunt est. Dolorum, dolores aliquid porro non officiis itaque sed eligendi neque? Quia nisi quos odio dolores fugit. Blanditiis vitae fugit corrupti itaque autem, eius libero molestias, vel eum cumque nesciunt consequuntur quasi et nam explicabo repudiandae sed odit dolores tenetur, cupiditate aliquam ad ipsum aperiam fugiat. Odit repellendus, quae, sint ducimus quos tempore dicta ab, voluptatum asperiores consequatur possimus et consequuntur porro doloribus natus sunt temporibus atque!"
        </p>
    </div>

    {{-- @foreach ($about as $about)
        <h2 class="text-center mb-3">
            {{ $about["title"] }}
        </h2>
        <h5 class="text-justify">
            {{ $about["body"] }}
        </h5>
    @endforeach
     --}}
@endsection