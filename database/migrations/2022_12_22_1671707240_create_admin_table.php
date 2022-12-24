<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {

            $table->id();
            $table->integer('user_id')->unique();
            $table->timestamps();



        });
    }

    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
