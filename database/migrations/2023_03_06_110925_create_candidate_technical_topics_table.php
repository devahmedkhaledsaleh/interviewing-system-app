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
        Schema::create('candidate_technical_topics', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('technical_topics_id');
            $table->unsignedInteger('candidate_id');
            $table->integer('score');
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_technical_topics');
    }
};
