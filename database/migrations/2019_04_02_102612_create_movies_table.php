<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table of movie show in hall
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('movie_id');
            $table->integer('hall_id');
            $table->string('movie_name');
            $table->string('movie_desc');
            $table->string('movie_image');
            $table->string('movie_length');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
