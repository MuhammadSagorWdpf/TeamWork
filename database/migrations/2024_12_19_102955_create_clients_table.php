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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key referencing the user
            $table->string('email');
            $table->string('password');
            $table->string('state');
            $table->string('city');
            $table->string('postal_code');
            $table->string('therapy_type');
            $table->string('area_of_focus');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('phone_number');
            $table->enum('gender', ['male', 'female','other']);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
