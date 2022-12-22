<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {

            $table->id();
            $table->string('title', 45);
            $table->string('text', 1000);
            $table->integer('user_id');


        });
    }

    public function down()
    {
        Schema::dropIfExists('article');
    }
}
