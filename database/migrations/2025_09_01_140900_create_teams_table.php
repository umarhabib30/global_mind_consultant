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
       Schema::create('teams', function (Blueprint $table) {
    $table->id();

    // Basic Info
    $table->string('name');
    $table->string('email')->nullable();
    $table->string('role')->nullable();
    $table->text('bio')->nullable();

    // Images
    $table->string('profile_pic')->nullable();
    $table->string('banner')->nullable();

    // Skills (JSON Array)
    $table->json('skills')->nullable();

    // Social Links
    $table->string('facebook')->nullable();
    $table->string('instagram')->nullable();
    $table->string('linkedin')->nullable();

    // Work Experience
    $table->year('work_start_year')->nullable();
    $table->year('work_end_year')->nullable();
    $table->string('designation')->nullable();
    $table->string('company_name')->nullable();

    // Education
    $table->string('degree_name')->nullable();
    $table->string('university_name')->nullable();
    $table->year('education_year')->nullable();

    $table->enum('status', ['active', 'inactive'])->default('active');

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
