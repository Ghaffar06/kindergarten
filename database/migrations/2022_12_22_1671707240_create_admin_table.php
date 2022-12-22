<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {

            $table->integer('user_id')->unique();


        });
    }

    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
