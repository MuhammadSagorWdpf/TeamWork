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
        Schema::create('doctor_professional_infos', function (Blueprint $table) {
            $table->id();
            $table->string('qualification');
            $table->string('registration_number');
            $table->string('practice_name');
            $table->string('practice_address');
            $table->enum('therapy_type', ['online', 'offline']);
            $table->string('client_age_served');
            $table->time('session_length');
            $table->string('session_fee');
            $table->string('medicare_amount');
            $table->string('expert');
            $table->string('certificate');
            $table->string('certificate_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_professional_infos');
    }
};
