<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Settings;

class HomeController extends Controller
{

    /**
     * The Question instance.
     *
     * @var \Models\Question
     */
    protected $model;


    function __construct(Question $model) {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $s = (new Settings)->find(1);
        $data['questions'] = $this->model->getRandomTenQuestions();

        if($s->value) return view('quiz-binary', $data); // binary mode view
        return view('quiz-multiple', $data); // multiple mode view
    }


    public function checkMultiple(Request $request) {

        $q = $this->model->find($request->get('question_id'));
    
        if($q->correct_ans_id == $request->get('answer_id')) $isCorrect = true;
        else $isCorrect = false;
        

        if($isCorrect) $text = '<span class="text-success">Correct!</span> The right answer is : ';
        else $text = '<span class="text-danger">Sorry!</span> you are wrong! The right answer is : ';

        $text .= $q->getCorrectAnswer()->text;

        return response()->json([
            'content' => $text,
            'isCorrect' => $isCorrect
        ]);

    
       
    }


    public function checkBinary(Request $request) {

        $q = $this->model->find($request->get('question_id'));

        
        if($request->get('correct'))
        {
            if($q->correct_ans_id == $request->get('answer_id')) $isCorrect = true;
            else $isCorrect = false;
        } 
        else
        {
            if($q->correct_ans_id != $request->get('answer_id')) $isCorrect = true;
            else $isCorrect = false;
        }

        if($isCorrect) $text = '<span class="text-success">Correct!</span> The right answer is : ';
        else $text = '<span class="text-danger">Sorry!</span> you are wrong! The right answer is : ';

        $text .= $q->getCorrectAnswer()->text;

        return response()->json([
            'content' => $text,
            'isCorrect' => $isCorrect
        ]);


    }

}
