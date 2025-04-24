@extends('layouts.content-layout')

@section('page-name', 'Dashboard Siswa')
@section('page-description')

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
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="text-start mb-2 ">
                                <img src="{{ asset('images\content\bumi-bulan-matahari.jpg') }}" class="img-fluid shadow-sm"
                                    alt="">
                            </div>
                            <h3 class="card-title text-info">🌍 TAHUKAH KALIAN?</h3>
                            <p class="card-text">
                                Bumi tempat tinggal kita merupakan planet yang besar. Namun, Bumi hanya salah satu planet
                                dari sekian banyak planet di luar sana.
                                Masih ada planet yang jauh lebih besar daripada Bumi, lho!
                            </p>
                            <p class="card-text">
                                Sebenarnya, ada apa sajakah di luar angkasa? Ke mana Matahari saat malam hari? Lalu, ada di
                                mana Bulan saat siang hari?
                                Yuk bersiap, karena bab ini akan membawa kalian menjelajahi luar angkasa!
                            </p>
                        </div>
                    </div>

                    <div class="alert alert-warning mt-4" role="alert">
                        🌞 <strong>Tahukah kalian?</strong> Pergerakan Bumi mengakibatkan Matahari terbit dan terbenam.
                        Tanpa kita sadari, Bumi terus bergerak setiap saat.
                        Bagaimanakah Bumi kita bergerak? Mengapa kita tidak merasakannya, ya?
                        <br>👉 Yuk, kita pelajari lebih lanjut!
                    </div>
                </section>
                <section id="page-2">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="text-primary mb-4">1. Bumi, Bulan, dan Matahari</h2>

                            <p>
                                Saat kita melihat Matahari terbit di pagi hari dan terbenam di sore hari, kita mungkin
                                mengira bahwa Mataharilah yang bergerak.
                                Padahal sebenarnya, <strong>Bumilah yang berputar</strong>. Gerakan Bumi berputar pada
                                porosnya disebut <span class="text-info">rotasi</span>.
                                Rotasi Bumi berlangsung selama <strong>23 jam 56 menit</strong>, hampir sama dengan satu
                                hari.
                            </p>

                            <p>
                                Karena Bumi berputar terus-menerus dengan kecepatan tetap, kita tidak merasakan
                                pergerakannya.
                                <strong>Rotasi Bumi menyebabkan terjadinya siang dan malam</strong>, karena bagian Bumi yang
                                menghadap Matahari akan mengalami siang,
                                dan bagian yang membelakangi akan mengalami malam.
                            </p>

                            <p>
                                Selain berotasi, <strong>Bumi juga melakukan revolusi</strong>, yaitu gerakan mengelilingi
                                Matahari.
                                Satu kali revolusi Bumi membutuhkan waktu sekitar <strong>365¼ hari</strong>, atau satu
                                tahun.
                            </p>

                            <p>
                                Karena adanya revolusi Bumi dan kemiringan porosnya, terjadilah <span
                                    class="text-success">perubahan musim</span> di berbagai belahan dunia.
                                Jalur revolusi Bumi berbentuk <strong>elips</strong> (oval), bukan lingkaran sempurna.
                                Selama Bumi berevolusi, posisi Matahari terlihat berubah-ubah sepanjang tahun jika dilihat
                                dari Bumi.
                            </p>

                            <div class="card bg-light mb-4">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">🌕 Bagaimana dengan Bulan?</h5>
                                    <p class="card-text">
                                        Bulan, seperti Bumi, juga mengalami <strong>rotasi dan revolusi</strong>. Namun,
                                        Bulan <strong>mengelilingi Bumi</strong>, bukan langsung mengelilingi Matahari.
                                        Waktu untuk satu kali rotasi dan revolusi Bulan adalah sekitar <strong>28
                                            hari</strong>, sehingga kita selalu melihat sisi yang sama dari Bulan.
                                    </p>
                                    <p class="card-text">
                                        Gerakan Bulan ini menyebabkan <strong>fase-fase Bulan</strong> yang bisa kita lihat
                                        dari Bumi, seperti Bulan sabit, separuh, dan purnama.
                                    </p>
                                </div>
                            </div>

                            <div class="alert alert-warning">
                                🌍 <strong>Tanpa rotasi dan revolusi</strong>, kehidupan di Bumi tidak akan seperti
                                sekarang.
                                Jika Bumi tidak berotasi, satu sisi akan selalu siang dan sisi lainnya selalu malam, membuat
                                suhu ekstrem dan kehidupan sulit berkembang.
                                Tanpa revolusi, tidak akan ada musim seperti hujan dan kemarau.
                            </div>

                            <p>
                                Alam semesta diatur dengan sangat rapi — semua benda langit <strong>bergerak sesuai
                                    jalurnya</strong> masing-masing.
                                Astronot telah pergi ke Bulan, dan saat ini banyak negara sedang mengirim roket ke Mars dan
                                planet lain.
                            </p>

                            <div class="alert alert-info">
                                🚀 Siapa tahu, suatu hari nanti <strong>kamu bisa jadi ilmuwan atau astronot</strong> yang
                                menemukan hal-hal baru di alam semesta!
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <nav>
            <ul class="pagination justify-content-center" id="pagination">

            </ul>
        </nav>
        @include('scripts.content-scripts', [
            'nextLink' => route('materi', 'bumi'),
            'prevLink' => route('materi', 'menjelajahi-bumi-dan-antariksa'),
        ])
    </div>
@endsection


@push('scripts')
@endpush
