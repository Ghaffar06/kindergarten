<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {

            $table->increments(id);
            $table->string('name', 50);
            $table->string('email', 200);
            $table->string('password', 250);
            $table->string('role', 45);
            $table->primary('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
