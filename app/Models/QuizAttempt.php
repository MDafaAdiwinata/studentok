<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    use HasFactory;
    protected $fillable = [
        'quiz_id',
        'student_name',
        'answers',
        'score',
        'correct_answers',
        'wrong_answers'
    ];

    // Cast JSON ke array
    protected $casts = [
        'answers' => 'array'
    ];

    // Relasi ke quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
