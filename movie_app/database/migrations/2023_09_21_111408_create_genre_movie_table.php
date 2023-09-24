<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

// Миграция для таблицы 'genre_movie'
    public function up()
    {
        if(!Schema::hasTable('genre_movie')) {
        Schema::create('genre_movie', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('movie_id');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->primary(['genre_id', 'movie_id']);
        });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_movie');
    }
};
