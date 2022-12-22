<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleOptionTable extends Migration
{
    public function up()
    {
        Schema::create('article_option', function (Blueprint $table) {

            $table->id();
            $table->string('option', 200);
            $table->tinyInteger('answer',);

        });
    }

    public function down()
    {
        Schema::dropIfExists('article_option');
    }
}
