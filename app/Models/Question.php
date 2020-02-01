<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';


    protected $fillable = [
        'id', 'title', 'text', 'correct_ans_id'
    ];


    function getAnswers() {
    	return (new Answer)->where('question_id', '=', $this->id)->get();
    }

	function getCorrectAnswer() {
    	return (new Answer)->find($this->correct_ans_id);
    }    

    function getRandomTenQuestions() {
    	$arr = array();

    	while(count($arr) < 10)
    	{
    		$random = rand(1, 25); //If ids not in 1 - 25
    		if(!in_array($random, $arr)) array_push($arr, $random);
    	}

 		return $this->WhereIn('id', $arr)->get();
    }


    function getRandomAnswer() {
    	$random = rand(1, 4);
    	return (new Answer)->where('question_id', '=', $this->id)->where('num', '=', $random)->first();
    }


}