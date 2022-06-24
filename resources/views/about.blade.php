@extends('layout/main')

@section('container')
    <div class="container">
        <div class="text-center" style="color: black">
            <h2>
                Tentang<br>Lembaga Pendidikan, Penelitian, dan Pengembangan Sumber Daya Manusia
            </h2><br><br>
            
            <h5>
                Sejarah Singkat
            </h5>

            <h6>
                Lembaga Pendidikan, Penelitian, dan Pengembangan Sumber Daya Manusia (LP3SDM)  yang berdiri pada tanggal 9 September 2009, yang diketuai sekaligus didirikan oleh Dr.Khaerul Budhy Nagara, M.SI.
                <br>
                LP3SDM beralamat di Jl. Politeknik Komp Griya Mitra 2 BA 05 Bukit Lama, Palembang, Sumatera Selatan.
                <br>
                LP3SDM memiliki ruang administrasi, ruang diklat, ruang konsultasi, perpustakaan, serta halaman parkir untuk
                para karyawan.
            </h6><br>

            <h5>
                Visi
            </h5>
            <h6>
                Meningkatkan Kualitas Sumber Daya Manusia diberbagai bidang dalam melakukan penelitian.
            </h6><br>

            <h5>   
                Misi
            </h5>
            <h6>
                1. Melakukan kerjasama kepada pemerintah dan non-pemerintah dalam bidang penelitian dan Evaluasi <br>
                2. Melaksanakan kegiatan pelatihan, bimbingan, dan praktek 2 bidang penelitian dan evalusi <br>
                3. Melakukan kajian 2 ilmiah terkait penelitian dan evaluasi <br>
                4. Me-review dan melaksanakan Publikasi Ilmiah melalui jurnal ilmiah
            </h6><br>
            <h5>
                Struktur Organisasi
            </h5>

        </div>
    </div>
    
    {{-- @foreach ($about as $about)
        <h2 class="text-center mb-3">
            {{ $about["title"] }}
        </h2>
        <h5 class="text-justify">
            {{ $about["body"] }}
        </h5>
    @endforeach --}}
@endsection
