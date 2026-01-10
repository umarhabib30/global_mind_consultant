<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('title');                        // Event title
            $table->text('short_description')->nullable();  // Short description
            $table->text('long_description')->nullable();   // Long description (paragraphs)

            // Media
            $table->string('picture')->nullable();          // Event picture path

            // Timing
            $table->date('date');                            // Event date
            $table->time('start_time')->nullable();          // Start time
            $table->time('end_time')->nullable();            // End time

            // People & Location
            $table->string('speaker')->nullable();           // Event speaker
            $table->string('location')->nullable();          // Event location

            // Status
            $table->enum('status', ['scheduled', 'in_progress', 'completed', 'cancelled'])
                ->default('scheduled');

            // Additional Info (JSON arrays)
            $table->json('parameters')->nullable();          // Multiple points (JSON)
            $table->json('why_attend')->nullable();          // Multiple points (JSON)

            // Optional
            $table->integer('attendees')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
