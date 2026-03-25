<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ielts_course_enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ielts_course_id')->nullable()->constrained('ielts_courses')->nullOnDelete();
            $table->string('course_title');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 30);
            $table->string('preferred_time', 100)->nullable();
            $table->string('study_goal', 150)->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ielts_course_enrollments');
    }
};
