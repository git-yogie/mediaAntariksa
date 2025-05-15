<?php

namespace App\Http\Controllers;

use App\Helpers\Kuis_1;
use App\Helpers\Kuis_2;
use App\Helpers\Kuis_3;
use App\Helpers\Kuis_4;
use App\Helpers\Latihan_1;
use App\Helpers\Latihan_2;
use App\Helpers\Latihan_3;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Casts\Json;


class QuizController extends Controller
{


    public $quizInfo;

    public function __construct()
    {
        $this->quizInfo = [
            "latihan-1" => [
                "title" => "Latihan 1",
                "materi"=>"Menjelajah Bumi dan Antariksa",
                "type" => "Kuis",
                "question" => Latihan_1::$question,
            ],
            "latihan-2" => [
                "title" => "Latihan 2",
                "materi"=>"Dampak Rotasi dan Revolusi Bumi",
                "type" => "Kuis",
                "question" => Latihan_2::$question,
            ],
            "latihan-3" => [
                "title" => "Latihan 3",
                "materi"=>"Menjelajah Bumi dan Antariksa",
                "type" => "Kuis",
                "question" => Latihan_3::$question,
            ],
            "kuis-1" => [
                "title" => "Kuis 1",
                "materi"=>"Menjelajah Bumi,Matahari, dan Bulan",
                "type" => "Kuis",
                "question" => Kuis_1::$questions,
            ],
            "kuis-2" => [
                "title" => "Kuis 2",
                "materi"=>"Rotasi Bumi",
                "type" => "Kuis",
                "question" => Kuis_2::$questions,
            ],
            "kuis-3" => [
                "title" => "Kuis 3",
                "materi"=>"Menjelajah Bumi dan Antariksa",
                "type" => "Kuis",
                "question" => Kuis_3::$questions,
            ],
            "kuis-4" => [
                "title" => "Kuis 4",
                "materi"=>"Menjelajah Bumi dan Antariksa",
                "type" => "Kuis",
                "question" => Kuis_4::$questions,
            ],
        ];
    }

    public function BeforeQuiz($param)
    {
        $title = $this->quizInfo[$param]["title"];
        $info = $this->quizInfo[$param];
        $countQuestion = count($this->quizInfo[$param]["question"]);

        $data = [
            "title" => $title,
            "materi" => $this->quizInfo[$param]["materi"],
            "info" => $info,
            "countQuestion" => $countQuestion,
            "durasi" => 20,
        ];

        return view("pages.quiz.quizStart", compact("data","param"));
    }

    public function startQuiz($param)
    {

        $durasiEvaluasi = 20;
        $endtime = date("Y-m-d H:i:s", strtotime("+$durasiEvaluasi minutes"));
        if (!session("endtime")) {
            session(["endtime" => $endtime, "startTime" => date("Y-m-d H:i:s")]);
        } else {
            session(["endtime" => $endtime, "startTime" => date("Y-m-d H:i:s")]);
        }

        $soalQuiz = $this->quizInfo[$param]["question"];
        $materi = $param;
        $info = $this->quizInfo[$param];

        // shuffle($soalQuiz);

        return view("pages.quiz.index", compact("soalQuiz", "materi", "info"));
    }

    public function submit(Request $request)
    {

        $quiz = Quiz::where("user_id", Auth::User()->id)->where("materi", $request->materi)->first();

        if ($quiz) {
            $quiz->user_id = Auth::User()->id;
            $quiz->materi = $request->materi;
            $quiz->nilai = $request->nilai;
            $quiz->jawaban = Json::encode($request->quiz);
            $quiz->waktu_mulai = Carbon::parse($request->waktu_mulai)->format('Y-m-d H:i:s');
            $quiz->waktu_selesai = Carbon::parse($request->waktu_selesai)->format('Y-m-d H:i:s');
            $quiz->status = $request->nilai >= 70 ? "lulus" : "tidak lulus";
            $quiz->save();
        } else {
            $quiz = new quiz();
            $quiz->user_id = Auth::User()->id;
            $quiz->materi = $request->materi;
            $quiz->nilai = $request->nilai;
            $quiz->jawaban = Json::encode($request->quiz);
            $quiz->waktu_mulai = Carbon::parse($request->waktu_mulai)->format('Y-m-d H:i:s');
            $quiz->waktu_selesai = Carbon::parse($request->waktu_selesai)->format('Y-m-d H:i:s');
            $quiz->status = $request->nilai >= 70 ? "lulus" : "tidak lulus";
            $quiz->save();
        }


        return response()->json($request->all());
    }
}
