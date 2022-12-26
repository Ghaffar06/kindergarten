<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordTable extends Migration
{
    public function up()
    {
        Schema::create('word', function (Blueprint $table) {

            $table->id();

            $table->string('text', 45);
            $table->integer('score');

        });
    }

    public function down()
    {
        Schema::dropIfExists('word');
    }
}
