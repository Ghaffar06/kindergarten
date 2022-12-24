<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntertainmentVideoTable extends Migration
{
    public function up()
    {
        Schema::create('entertainment_video', function (Blueprint $table) {

            $table->id();

            $table->string('url', 200);
            $table->integer('cost',);
            $table->integer('user_id');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('entertainment_video');
    }
}
