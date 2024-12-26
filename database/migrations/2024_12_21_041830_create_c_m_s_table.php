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
        Schema::create('c_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('page')->nullable();
            $table->string('section')->nullable();
            $table->string('images')->nullable();
            $table->string('url')->nullable();
            $table->text('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('icon')->nullable();
            $table->date('date')->nullable();
            $table->string('question')->nullable();
            $table->string('answer')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('status')->nullable()->default(0);
            $table->string('card_title_1')->nullable();
            $table->string('card_title_2')->nullable();
            $table->string('card_title_3')->nullable();
            $table->string('card_title_4')->nullable();
            $table->string('card_title_5')->nullable();
            $table->string('card_title_6')->nullable();
            $table->string('card_title_7')->nullable();
            $table->string('card_title_8')->nullable();
            $table->string('card_title_9')->nullable();
            $table->string('card_title_10')->nullable();
            $table->text('card_desc_1')->nullable();
            $table->text('card_desc_2')->nullable();
            $table->text('card_desc_3')->nullable();
            $table->text('card_desc_4')->nullable();
            $table->text('card_desc_5')->nullable();
            $table->text('card_desc_6')->nullable();
            $table->text('card_desc_7')->nullable();
            $table->text('card_desc_8')->nullable();
            $table->text('card_desc_9')->nullable();
            $table->text('card_desc_10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_m_s');
    }
};
