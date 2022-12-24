<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordPhotoTable extends Migration
{
    public function up()
    {
        Schema::create('word_photo', function (Blueprint $table) {

            $table->id();
            $table->string('url', 200);
            $table->integer('word_id');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('word_photo');
    }
}
