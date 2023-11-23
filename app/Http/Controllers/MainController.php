<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
{
    $quizzes = Quiz::where('status', 1)
        ->whereNotNull('image')
        ->orderByDesc('create_date')
        ->take(8)
        ->get();

    $remainingQuizzesCount = 8 - $quizzes->count();

    if ($remainingQuizzesCount > 0) {
        $additionalQuizzes = Quiz::where('status', 1)
            ->where('description', '<>', '')
            ->whereNotIn('id', $quizzes->pluck('id')->toArray())
            ->take($remainingQuizzesCount)
            ->get();

        $quizzes = $quizzes->merge($additionalQuizzes);
    }

    return view('home', compact('quizzes'));
}
}
