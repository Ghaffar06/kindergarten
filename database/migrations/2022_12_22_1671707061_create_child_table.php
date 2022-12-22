<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildTable extends Migration
{
    public function up()
    {
        Schema::create('child', function (Blueprint $table) {
            
            $table->integer('user_id')->unique();
            $table->integer('score',);
            $table->datetime('birthdate');
            $table->integer('level' ); 

        });
    }

    public function down()
    {
        Schema::dropIfExists('child');
    }
}
