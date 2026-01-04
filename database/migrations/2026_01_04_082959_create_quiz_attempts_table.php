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
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade'); // ID quiz yang dikerjakan
            $table->string('student_name'); // Nama siswa yang mengerjakan
            $table->json('answers'); // Jawaban siswa dalam format JSON
            // Format: [{"question_index": 0, "answer": "A"}]
            $table->integer('score'); // Skor yang didapat
            $table->integer('correct_answers'); // Jumlah jawaban benar
            $table->integer('wrong_answers'); // Jumlah jawaban salah
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_attempts');
    }
};
