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
        Schema::create('success_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('client_name')->nullable();
            $table->boolean('is_anonymous')->default(false);
            $table->string('country')->nullable();
            $table->string('visa_type')->nullable();
            $table->string('approval_status')->nullable();
            $table->date('approval_date')->nullable();
            $table->unsignedInteger('processing_time_days')->nullable();
            $table->string('processing_time_text')->nullable();
            $table->text('case_summary')->nullable();
            $table->longText('full_story')->nullable();

            $table->string('cover_image')->nullable();
            $table->string('cover_image_alt')->nullable();
            $table->boolean('cover_image_blur')->default(false);
            $table->string('visa_approval_image')->nullable();
            $table->string('visa_approval_image_alt')->nullable();
            $table->boolean('visa_approval_image_blur')->default(false);
            $table->json('gallery_images')->nullable();
            $table->json('gallery_meta')->nullable();

            $table->boolean('documents_verified')->default(false);
            $table->text('testimonial_quote')->nullable();
            $table->unsignedTinyInteger('rating')->nullable();
            $table->json('tags')->nullable();

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('og_image')->nullable();

            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->boolean('featured')->default(false);
            $table->timestamps();

            $table->index(['status', 'featured']);
            $table->index(['country', 'visa_type']);
            $table->index('approval_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('success_stories');
    }
};
