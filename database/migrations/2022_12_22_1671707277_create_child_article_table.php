<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildArticleTable extends Migration
{
    public function up()
    {
        Schema::create('child_article', function (Blueprint $table) {

            $table->id();
            $table->integer('max_score',);
            $table->integer('user_id');
            $table->integer('article_id');


        });
    }

    public function down()
    {
        Schema::dropIfExists('child_article');
    }
}