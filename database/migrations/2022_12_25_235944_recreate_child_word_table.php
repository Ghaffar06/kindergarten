<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateChildWordTable extends Migration
{
    public function up()
    {
        Schema::create('child_word', function (Blueprint $table) {

            $table->id();
            $table->integer('child_id');
            $table->integer('word_id');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('child_word');
    }
}
