<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function show()
    {
        $quizzes = Quiz::all();
        return view('showQuiz', ['quizzes' => $quizzes]);
    }
}
