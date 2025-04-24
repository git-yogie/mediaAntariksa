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
                                <h5 class="m-b-10">Menjelajahi sistem tata surya!</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Planet sebagai anggota tata surya</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="content">
                <section id="page-1">
                    <div class="container my-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title">🪐 Planet dalam Tata Surya</h5>
                                <p class="card-text">
                                    <strong>Bumi</strong> merupakan salah satu dari <strong>delapan planet</strong> yang
                                    mengelilingi Matahari.
                                    Sebelum tahun 2006, para astronom menyepakati bahwa ada 9 planet dalam tata surya.
                                </p>
                                <p class="card-text">
                                    Namun, pada <strong>25 Agustus 2006</strong>, ada kesepakatan baru yang dibuat oleh para
                                    astronom.
                                    <strong>Pluto tidak lagi dianggap sebagai planet</strong> karena ukurannya terlalu kecil
                                    — bahkan lebih kecil dari Bulan!
                                </p>
                                <p class="card-text">
                                    Sejak saat itu, kita hanya mengenal <strong>delapan planet utama</strong> dalam tata
                                    surya, yaitu:
                                    <em>Merkurius, Venus, Bumi, Mars, Jupiter, Saturnus, Uranus, dan Neptunus</em>.
                                </p>
                                <p class="card-text">
                                    Kedelapan planet tersebut <strong>mengorbit Matahari</strong> melalui jalur yang disebut
                                    <strong>garis edar</strong> atau <strong>orbit</strong>,
                                    dan orbit ini berbentuk <strong>elips</strong>, bukan lingkaran sempurna.
                                </p>
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
        'nextLink' => route('materi', 'mengenal-lebih-dalam-tentang-planet'),
        'prevLink' => route('materi', 'tata-surya-dan-matahari-sebagai-pusatnya'),
    ])
@endsection


@push('scripts')
@endpush
