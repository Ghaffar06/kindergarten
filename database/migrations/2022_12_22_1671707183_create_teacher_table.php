<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unique();

            $table->string('admin_confirmed', 1);

        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
