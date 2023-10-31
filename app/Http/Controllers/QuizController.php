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

    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('quizzes.edit', ['quiz' => $quiz]);
    }

    public function store(Request $request, $id = null)
    {
        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ];

        if ($id) {
            $quiz = Quiz::findOrFail($id);
            $quiz->update($data);
        } else {
            $quiz = Quiz::create($data);
        }

        return redirect()->route('quizzes.index');
    }
}
