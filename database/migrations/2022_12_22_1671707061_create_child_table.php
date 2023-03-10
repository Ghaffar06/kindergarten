<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildTable extends Migration
{
    public function up()
    {
        Schema::create('child', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->integer('score');
            $table->datetime('birthdate');
            $table->integer('level');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('child');
    }
}
