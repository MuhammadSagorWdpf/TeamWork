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
        Schema::create('doctor_profile_descriptions', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->string('profile_image');
            $table->unsignedBigInteger('doctor_personal_info_id');
            $table->unsignedBigInteger('doctor_professional_info_id');
            $table->foreign('doctor_personal_info_id')->references('id')->on('doctor_personal_infos')->onDelete('cascade');
            $table->foreign('doctor_professional_info_id')->references('id')->on('doctor_professional_infos')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_profile_descriptions');
    }
};
