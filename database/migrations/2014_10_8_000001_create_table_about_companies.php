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
        Schema::create('about_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('contact_1')->nullable();
            $table->string('contact_2')->nullable();
            $table->string('email_1')->nullable();
            $table->string('email_2')->nullable();
            $table->string('location')->nullable();
            $table->string('logo')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('twiter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_companies');
    }
};
