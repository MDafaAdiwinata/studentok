<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'questions',
        'total_questions'
    ];

    // Cast JSON ke array agar mudah diakses
    protected $casts = [
        'questions' => 'array'
    ];

    // Relasi ke quiz attempts
    public function attempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }
}
