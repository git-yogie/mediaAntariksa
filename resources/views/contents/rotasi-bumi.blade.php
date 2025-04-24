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
                                <h5 class="m-b-10">Dampak Gerak Rotasi Bumi dan Revolusi diKehidupan Kita!</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Rotasi Bumi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="content">
                <section id="page-1">
                    <div class="container my-5">
                        <div class="card shadow  border-0">
                            <div class="card-body p-5">
                                <h2 class="card-title text-primary fw-bold mb-4">
                                    🌍 Tahukah Kamu?
                                </h2>
                                <p class="card-text fs-5">
                                <figure class="text-center mb-4">
                                    <img src="{{ asset('images\content\gerak-waktu.png') }}"
                                        class="img-fluid rounded shadow-sm" alt="Gambar Bumi">
                                    <figcaption class="mt-2 text-muted">Gambar 5: Perbedaan Waktu Antar Negara</figcaption>
                                </figure>
                                Bumi selalu berputar, lho! Inilah yang membuat waktu di setiap tempat berbeda.
                                Bumi berputar pada porosnya selama <strong>24 jam</strong>, yang disebut
                                <strong>rotasi</strong>.
                                Saat satu bagian Bumi menghadap Matahari, di sana terjadi <strong>siang</strong>.
                                Sementara bagian yang lain menjadi <strong>malam</strong> karena tidak terkena cahaya
                                Matahari.
                                </p>
                                <p class="card-text fs-5">
                                    Inilah yang membuat ada <strong>perbedaan waktu</strong> di setiap negara.
                                    Selain berputar, Bumi juga <strong>bergerak mengelilingi Matahari</strong> selama
                                    <strong>1 tahun</strong>.
                                    Gerakan ini disebut <strong>revolusi</strong> dan menyebabkan <strong>perubahan
                                        musim</strong> di beberapa negara.
                                </p>
                            </div>
                        </div>
                    </div>

                </section>
                <section id="page-2">
                    <div class="container my-5">
                        <div class="card shadow  border-0 mb-4">
                            <div class="card-body p-5">
                                <h2 class="card-title text-success fw-bold mb-4">
                                    🌎 Rotasi Bumi
                                </h2>
                                <p class="card-text fs-5">
                                    Perputaran Bumi pada porosnya disebut <strong>rotasi Bumi</strong>.
                                    Periode rotasi Bumi adalah <strong>23 jam 56 menit 4 detik</strong> yang dinamakan
                                    <strong>satu hari</strong>.
                                    Arah rotasi Bumi adalah dari <strong>barat ke timur</strong>, sehingga <strong>Matahari
                                        terbit di sebelah timur</strong> dan terbenam di sebelah barat.
                                </p>
                                <p class="card-text fs-5">
                                    Karena itu, wilayah Indonesia bagian timur lebih dulu melihat Matahari terbit dibanding
                                    bagian tengah dan barat.
                                    Dalam sekali rotasi, Bumi menempuh <strong>360º bujur dalam 24 jam</strong>. Artinya,
                                    <strong>1º bujur = 4 menit</strong>.
                                    Jadi, lokasi yang berbeda 1º bujur akan berbeda waktu sebesar 4 menit.
                                </p>
                            </div>
                        </div>

                        <div class="card shadow border-0">
                            <div class="card-body p-5">
                                <h4 class="card-title text-info fw-bold mb-3">
                                    🔄 Akibat Rotasi Bumi
                                </h4>
                                <ul class="fs-5">
                                    <li>🌞 Terjadinya <strong>siang dan malam</strong></li>
                                    <li>🕐 Perbedaan <strong>waktu</strong> di berbagai wilayah di dunia</li>
                                    <li>🌬️ Terjadinya <strong>gerak semu harian Matahari</strong></li>
                                    <li>💨 Pembelokan arah <strong>angin dan arus laut</strong> (efek Coriolis)</li>
                                    <li>🌪️ Terbentuknya <strong>zona waktu</strong> di Bumi</li>
                                    <li>🎡 Adanya <strong>penggembungan Bumi di khatulistiwa</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="page-3">
                    <div class="container py-5">
                        <div class="card shadow border-0">
                            <div class="card-body p-5">
                                <figure class="text-center mb-4">
                                    <img src="{{ asset('images\content\gerak-semu-harian-matahari.jpg') }}"
                                        class="img-fluid rounded shadow-sm" alt="Gambar Bumi">
                                    <figcaption class="mt-2 text-muted">Gambar 6: Gerak semu harian matahari</figcaption>
                                </figure>
                                <h2 class="card-title text-warning fw-bold mb-4">
                                    🌅 Gerak Semu Harian Matahari
                                </h2>
                                <p class="card-text fs-5">
                                    Bagaimanakah gerakan Matahari jika dilihat dari Bumi?
                                    <strong>Matahari selalu terbit di sebelah timur dan tenggelam di sebelah barat</strong>.
                                    Gerakan seperti ini disebut <strong>gerak semu harian Matahari</strong>.
                                </p>
                                <p class="card-text fs-5">
                                    Gerakan ini terjadi karena adanya <strong>rotasi Bumi</strong>. Bumi berotasi dari
                                    <strong>barat ke timur</strong>,
                                    sehingga Matahari <em>seolah-olah</em> tampak bergerak dari <strong>timur ke
                                        barat</strong>.
                                </p>

                                <!-- Optional placeholder for image -->

                            </div>
                        </div>
                </section>
                <section id="page-4">
                    <div class="card shadow border-0">
                        <div class="card-body p-5">
                            <h2 class="card-title text-primary fw-bold mb-4">
                                🌤️ Adanya Siang dan Malam
                            </h2>
                            <p class="card-text fs-5">
                                Lama waktu <strong>siang dan malam</strong> tidak selalu sama di setiap tempat di dunia.
                                Di <strong>Indonesia</strong> dan negara-negara <strong>khatulistiwa</strong> lainnya, siang
                                dan malam
                                rata-rata berlangsung selama <strong>sekitar 12 jam</strong>.
                            </p>
                            <p class="card-text fs-5">
                                Namun di negara lain seperti <strong>Jepang</strong> atau negara-negara
                                <strong>Eropa</strong>,
                                durasi siang dan malam <strong>bergantung pada musim</strong> yang sedang terjadi.
                                Misalnya, saat <strong>musim dingin</strong>, siang hari akan lebih <strong>singkat</strong>
                                dan malam hari menjadi <strong>lebih panjang</strong>.
                            </p>

                            <!-- Optional image -->
                            <div class="text-center mt-4">
                                <img src="{{ asset('images\content\rotasi-bumi.jpg') }}" alt="Perbedaan Siang dan Malam"
                                    class="img-fluid rounded shadow-sm" style="max-width: 600px;">
                                <p class="text-muted mt-2"><em>Rotasi Bumi</em></p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="page-5">
                    <div class="container py-5">
                        <div class="card shadow border-0">
                            <div class="card-body p-5">
                                <h2 class="card-title text-success fw-bold mb-4">
                                    🕒 Zona Waktu Akibat Rotasi Bumi
                                </h2>
                                <div class="text-center mt-4">
                                    <img src="{{ asset('images\content\zona-waktu.png') }}"
                                        alt="Peta Zona Waktu Dunia" class="img-fluid rounded shadow-sm"
                                        style="max-width: 100%;">
                                    <p class="text-muted mt-2"><em>Peta zona waktu di seluruh dunia</em></p>
                                </div>
                                <p class="card-text fs-5">
                                    Rotasi Bumi menyebabkan adanya <strong>perbedaan waktu</strong> di berbagai tempat di
                                    dunia.
                                    Bumi dibagi menjadi <strong>24 zona waktu</strong>. Kenapa 24? Karena Bumi berputar
                                    selama <strong>24 jam</strong>.
                                </p>
                                <p class="card-text fs-5">
                                    Saat satu bagian Bumi <strong>menghadap Matahari</strong>, di sana terjadi <strong>siang
                                        hari</strong>.
                                    Sementara bagian yang <strong>membelakangi Matahari</strong> mengalami <strong>malam
                                        hari</strong>.
                                    Karena rotasi terus berlangsung, setiap wilayah menerima sinar Matahari pada waktu yang
                                    berbeda.
                                </p>
                                <p class="card-text fs-5">
                                    Misalnya, ketika <strong>Indonesia siang</strong>, <strong>Amerika</strong> masih
                                    <strong>malam</strong>.
                                    Semakin jauh jaraknya, semakin besar selisih waktunya.
                                </p>

                                <!-- Gambar ilustrasi zona waktu -->

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
        'nextLink' => route('materi', 'revolusi-bumi'),
        'prevLink' => route('quiz.prepare', 'latihan-1'),
    ])
@endsection


@push('scripts')
@endpush
