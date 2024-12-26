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
        Schema::create('psychologists', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->enum('gender', ['male', 'female','other']);
            $table->string('phone_number');
            $table->string('language');
            $table->string('email');
            $table->string('password');
            $table->string('qualification');
            $table->string('registration_number');
            $table->string('practice_name');
            $table->string('practice_address');
            $table->enum('therapy_type', ['online', 'offline']);
            $table->string('client_age_served');
            $table->time('session_length');
            $table->string('session_fee');
            $table->string('medicare_amount');
            $table->string('expertise_area');
            $table->string('certificate_image');
            $table->longText('description');
            $table->string('profile_image');
            $table->string('experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psychologists');
    }
};
