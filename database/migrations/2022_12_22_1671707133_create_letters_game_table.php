<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersGameTable extends Migration
{
    public function up()
    {
        Schema::create('letters_game', function (Blueprint $table) {

            $table->id();
            $table->integer('level',);
            $table->string('letter', 1);
            $table->integer('correct',);
            $table->integer('wrong',);
            $table->integer('user_id');



        });
    }

    public function down()
    {
        Schema::dropIfExists('letters_game');
    }
}
