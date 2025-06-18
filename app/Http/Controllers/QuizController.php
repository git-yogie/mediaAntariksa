<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Helpers\Kuis_1;
use App\Helpers\Kuis_2;
use App\Helpers\Kuis_3;
use App\Helpers\Kuis_4;
use App\Helpers\Evaluasi;
use App\Helpers\Latihan_1;
use App\Helpers\Latihan_2;
use App\Helpers\Latihan_3;
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
            "kuis-1" => [
                "title" => "Kuis 1",
                "materi"=>"Menjelajah Bumi dan Antariksa",
                "type" => "Kuis",
                "question" => Latihan_1::$question,
            ],
            "kuis-2" => [
                "title" => "Kuis 2",
                "materi"=>"Dampak Rotasi dan Revolusi Bumi",
                "type" => "Kuis",
                "question" => Latihan_2::$question,
            ],
            "kuis-3" => [
                "title" => "Kuis 3",
                "materi"=>"Menjelajah Bumi dan Antariksa",
                "type" => "Kuis",
                "question" => Latihan_3::$question,
            ],
            "evaluasi" => [
                "title"=>"Evaluasi",
                "materi"=>"evaluasi",
                "type"=>"Evaluasi",
                "question"=>Evaluasi::$questions,
                "durasi"=>60
            ]
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

        $data = $this->quizInfo[$param];
        if(isset($data['durasi'])){
            $durasiEvaluasi = $data["durasi"];
        }



        $endtime = date("Y-m-d H:i:s", strtotime("+$durasiEvaluasi minutes"));
        if (!session("endtime")) {
            session(["endtime" => $endtime, "startTime" => date("Y-m-d H:i:s")]);
        } else {
            session(["endtime" => $endtime, "startTime" => date("Y-m-d H:i:s")]);
        }

        $soalQuiz = $this->quizInfo[$param]["question"];
        $materi = $param;
        $info = $this->quizInfo[$param];
        $title = $this->quizInfo[$param]["title"];



        // shuffle($soalQuiz);

        return view("pages.quiz.index", compact("soalQuiz", "materi", "info","title"));
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
