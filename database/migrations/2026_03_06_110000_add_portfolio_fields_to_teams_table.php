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
        Schema::table('teams', function (Blueprint $table) {
            $table->string('tagline')->nullable()->after('role');
            $table->string('phone')->nullable()->after('email');
            $table->string('whatsapp')->nullable()->after('phone');
            $table->string('location')->nullable()->after('whatsapp');
            $table->string('address')->nullable()->after('location');
            $table->string('website')->nullable()->after('linkedin');
            $table->string('twitter')->nullable()->after('website');
            $table->string('youtube')->nullable()->after('twitter');
            $table->string('tiktok')->nullable()->after('youtube');
            $table->string('github')->nullable()->after('tiktok');
            $table->unsignedInteger('years_experience')->nullable()->after('company_name');
            $table->unsignedInteger('clients_helped')->nullable()->after('years_experience');
            $table->unsignedInteger('sessions_completed')->nullable()->after('clients_helped');
            $table->text('portfolio_summary')->nullable()->after('bio');
            $table->text('contact_note')->nullable()->after('portfolio_summary');
            $table->json('languages')->nullable()->after('skills');
            $table->json('experiences')->nullable()->after('education_year');
            $table->json('educations')->nullable()->after('experiences');
            $table->json('certifications')->nullable()->after('educations');
            $table->json('awards')->nullable()->after('certifications');
            $table->json('projects')->nullable()->after('awards');
            $table->boolean('is_featured')->default(false)->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn([
                'tagline',
                'phone',
                'whatsapp',
                'location',
                'address',
                'website',
                'twitter',
                'youtube',
                'tiktok',
                'github',
                'years_experience',
                'clients_helped',
                'sessions_completed',
                'portfolio_summary',
                'contact_note',
                'languages',
                'experiences',
                'educations',
                'certifications',
                'awards',
                'projects',
                'is_featured',
            ]);
        });
    }
};

