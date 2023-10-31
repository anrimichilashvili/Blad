<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, "index"])->name('index');
Route::get('/showQuiz', [QuizController::class, "show"])->name('show');
Route::post('/subscribe', [MainController::class, "subscribe"])->name('subscribe');

Route::get('/quizzes/{id}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
Route::post('/quizzes/{id?}', [QuizController::class, 'store'])->name('quizzes.store');
