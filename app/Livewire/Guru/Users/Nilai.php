<?php

namespace App\Livewire\Guru\Users;

use Livewire\Component;
use App\Models\User;

class Nilai extends Component
{
    public $users;
    public $materi = "latihan-1";
    public $search = '';

    // Statistik keseluruhan
    public $jumlah_dikerjakan;
    public $jumlah_belum_dikerjakan;
    public $rata_rata;
    public $nilai_tertinggi;
    public $nilai_terendah;
    public $jumlah_lulus;
    public $jumlah_tidak_lulus;

    public function mount()
    {
        $this->retrieveData();
    }

    public function retrieveData()
    {
        // Ambil user dengan quiz yang sesuai materi
        $query = User::with(['quizzes' => function ($q) {
            $q->where('materi', $this->materi)->first();
        }])->where('role', 'siswa');

        if (!empty($this->search)) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        $this->users = $query->get();

        // Gabungkan semua quiz dari semua user untuk statistik
        $allQuizzes = $this->users->flatMap(fn($user) => $user->quizzes);

        $this->jumlah_dikerjakan = $allQuizzes->count();
        $this->rata_rata = $allQuizzes->avg('nilai');
        $this->nilai_tertinggi = $allQuizzes->max('nilai');
        $this->nilai_terendah = $allQuizzes->min('nilai');
        $this->jumlah_lulus = $allQuizzes->where('status', 'lulus')->count();
        $this->jumlah_tidak_lulus = $allQuizzes->where('status', 'tidak lulus')->count();
        $this->jumlah_belum_dikerjakan = $this->users->count() - $this->jumlah_dikerjakan;

    }

    public function render()
    {
        return view('livewire.guru.users.nilai')->layout('layouts.guru-layout');
    }
}
