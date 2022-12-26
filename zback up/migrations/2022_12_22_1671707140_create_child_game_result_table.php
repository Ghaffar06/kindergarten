<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildGameResultTable extends Migration
{
    public function up()
    {
        Schema::create('child_game_result', function (Blueprint $table) {

            $table->id();
            $table->integer('best_score');
            $table->datetime('date_best');

        });
    }

    public function down()
    {
        Schema::dropIfExists('child_game_result');
    }
}
