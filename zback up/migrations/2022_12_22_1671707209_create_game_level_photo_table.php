<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameLevelPhotoTable extends Migration
{
    public function up()
    {
        Schema::create('game_level_photo', function (Blueprint $table) {

            $table->id();

        });
    }

    public function down()
    {
        Schema::dropIfExists('game_level_photo');
    }
}