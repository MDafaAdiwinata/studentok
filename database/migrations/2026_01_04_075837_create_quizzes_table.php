<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul quiz
            $table->text('description')->nullable(); // Deskripsi materi
            $table->json('questions'); // Menyimpan soal dan jawaban dalam format JSON
            // Format: [{"question": "...", "options": ["A", "B", "C", "D"], "correct_answer": "A"}]
            $table->integer('total_questions')->default(0); // Jumlah soal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
