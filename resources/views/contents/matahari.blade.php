@extends('layouts.content-layout')

@section('page-name', 'Bulan')
@section('page-description', 'Berkenalan dengan Bulan')

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
                                <h2 class="card-title mb-3">Matahari: Bintang Besar yang Menghidupkan Bumi</h2>
                                <figure class="text-center mb-4">
                                    <img src="{{ asset('images\content\matahari-background.jpg') }}"
                                        class="img-fluid rounded shadow-sm" alt="Gambar Bumi">
                                    <figcaption class="mt-2 text-muted">Gambar 3: Bulan</figcaption>
                                </figure>
                                <p>Matahari terbentuk dari gas helium dan hidrogen yang sangat panas dan biasa disebut bola
                                    panas. Matahari merupakan salah satu dari jutaan bintang. Sebagai bintang, Matahari
                                    memancarkan cahayanya sendiri. Cahaya Matahari berasal dari reaksi gas-gas di dalam inti
                                    Matahari. Reaksi ini menghasilkan energi yang sangat besar. Energi tersebut dilepaskan
                                    sebagai panas dan cahaya.</p>
                                <p>Energi yang dipancarkan Matahari setiap detik setara dengan energi Matahari yang diterima
                                    Bumi selama 100 tahun. Inilah sebabnya mengapa Matahari sangat penting bagi kehidupan di
                                    Bumi, memberikan cahaya dan panas yang mendukung tumbuhan, hewan, dan manusia.</p>
                                <p>Selain memberi energi, Matahari juga berperan dalam menciptakan berbagai fenomena alam
                                    seperti angin matahari, yang terdiri dari partikel-partikel bermuatan yang keluar dari
                                    permukaan Matahari. Partikel ini dapat mempengaruhi medan magnet Bumi dan menyebabkan
                                    fenomena aurora atau cahaya utara yang indah di langit.</p>

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
        'nextLink' => route('quiz.prepare', 'latihan-1'),
        'prevLink' => route('materi', 'bumi-bulan-dan-matahari'),
    ])
@endsection


@push('scripts')
@endpush
