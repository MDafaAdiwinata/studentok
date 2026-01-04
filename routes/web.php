<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizAttemptController;

Route::get('/', function () {
    return view('index');
});

// Quiz Generate
Route::get('/generate', [QuizController::class, 'create'])->name('quiz.create');
Route::post('/generate', [QuizController::class, 'store'])->name('quiz.store');

Route::get('/feedback', function () {
    return view('feedback');
});

// Try Quiz - Daftar semua quiz
Route::get('/try-quiz', [QuizController::class, 'index'])->name('quiz.index');

// Detail Quiz - Untuk mengerjakan quiz
Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');

// Submit Quiz
Route::post('/quiz/{id}/submit', [QuizAttemptController::class, 'submit'])->name('quiz.submit');

// Result Quiz
Route::get('/result/{attemptId}', [QuizAttemptController::class, 'result'])->name('quiz.result');
