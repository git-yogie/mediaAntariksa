@extends('layouts.content-layout')

@section('page-name', 'Bulan')
@section('page-description',"Berkenalan dengan Bulan")

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Menjelajahi Bumi dan Antariksa</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Materi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="content">
                <section id="page-1">
                    <div class="container my-5">
                        <div class="card shadow border-0">
                          <div class="card-body p-4">
                            <h2 class="card-title mb-3">Bulan, Satelit Alami Bumi</h2>
                            <figure class="text-center mb-4">
                                <img src="{{ asset("images\content\bulan-background.jpg") }}" class="img-fluid rounded shadow-sm" alt="Gambar Bumi">
                                <figcaption class="mt-2 text-muted">Gambar 3: Bulan</figcaption>
                            </figure>
                            <p>Bulan merupakan satelit alami yang dimiliki Bumi. Satelit adalah sebutan untuk benda langit yang mengelilingi sebuah planet. Sampai saat ini, Bulan satu-satunya tempat di luar Bumi yang pernah dikunjungi manusia. Waktu revolusi dan rotasinya sama, yaitu 27 hari. Namun, karena Bumi juga bergerak, waktu revolusi Bulan yang teramati dari Bumi, yaitu 29 hari.</p>
                            <p>Bulan mempengaruhi pasang surut air laut melalui gaya tarik gravitasi yang dimilikinya. Ketika Bulan berada dekat dengan laut, ia menarik air laut, menyebabkan air naik atau terjadi pasang. Sebaliknya, di sisi lain Bumi, air akan surut. Fenomena ini terjadi dua kali dalam sehari dan sangat penting untuk kehidupan di laut serta ekosistem pesisir.</p>
                            <p>Kita melihat penampakan Bulan berbeda-beda, kadang berbentuk sabit, purnama, atau hanya separuh. Sebenarnya, bentuk Bulan selalu sama. Namun, posisi Bulan terhadap Bumi berubah-ubah karena berevolusi. Sebenarnya, Bulan juga tidak bercahaya, lho! Cahaya yang kita lihat saat malam hari merupakan pantulan dari cahaya Matahari yang mengenai permukaan Bulan. Itulah mengapa Bulan tampak terang di malam hari. Tanpa Matahari, Bulan akan terlihat gelap. Fenomena ini juga menjelaskan mengapa kita bisa melihat fase-fase Bulan seperti Bulan sabit, separuh, dan purnama yang berubah seiring waktu.</p>
                          </div>
                        </div>
                      </div>

                </section>
                <nav>
                    <ul class="pagination justify-content-center" id="pagination">

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    @include('scripts.content-scripts', [
        'nextLink' => route('materi', 'matahari'),
        'prevLink' => route("materi","bumi"),
    ])
@endsection


@push('scripts')
@endpush
