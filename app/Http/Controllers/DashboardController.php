<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LearningProgress;
use App\Models\User;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $list_materi = [

        "menjelajah-matahari-bumi-dan-bulan" => [
            "total" => 5
        ],
        "dampak-gerak-rotasi-dan-revolusi-bumi" => [
            "total" => 4
        ],

        "menjelajahi-sistem-tata-surya" => [
            "total" => 2
        ],


    ];
    protected $badge = [
        "pemula" => [
            "point_minimum" => 100,
            "badge" => "1.png",
            "get" => false,
        ],
        "menengah" => [
            "point_minimum" => 300,
            "badge" => "2.png",
            "get" => false,
        ],
        "ahli" => [
            "point_minimum" => 500,
            "badge" => "3.png",
            "get" => false,
        ],
        "Ahli Evaluasi" => [
            "point_minimum" => 700,
            "badge" => "4.png",
            "get" => false,
        ],
    ];
    public function index()
    {
        foreach ($this->list_materi as $key => $value) {
            $this->list_materi[$key]["count"] = LearningProgress::where("user_id", auth()->user()->id)->where('materi', $key)->count();
            if ($this->list_materi[$key]["count"] == $value["total"]) {
                $this->list_materi[$key]["status"] = "done";
            } else {
                $this->list_materi[$key]["status"] = "progress";
            }
        }
        $topUsers = User::with('learningProgress')->where("role", "siswa")->get()->sortByDesc(function ($user) {
            return $user->learningProgress->sum('point');
        })->take(5);

        $loggedInUser = User::with('learningProgress')
            ->where('id', auth()->user()->id)
            ->first();

        $rank = User::with('learningProgress')
            ->get()
            ->sortByDesc(function ($user) {
                return $user->learningProgress->sum('point');
            })
            ->pluck('id')
            ->search($loggedInUser->id) + 1;
        $total = 0;
        $progress = 0;

        foreach ($this->list_materi as $key => $value) {
            $progress += $value["count"];
            $total += $value["total"];
        }

        $list_materi = $this->list_materi;
        $percentage = floor(($progress / $total) * 100);
        $point = $loggedInUser->learningProgress->sum('point');
        $badge = $this->badge;
        $countBadge = 0;
        foreach ($badge as $key => $value) {
            $badge[$key]["percentage"] = floor($point * 100 / $value["point_minimum"]);
            if ($point >= $value["point_minimum"]) {
                $badge[$key]["get"] = true;
                $countBadge += 1;
            }
        }

        $nilai_kuis = Quiz::where("user_id", auth()->user()->id)->get();



        return view('pages.dashboard', compact('percentage', 'progress', 'total', 'list_materi', 'topUsers', 'rank', 'badge', 'point', 'countBadge', 'nilai_kuis'));
    }
}
