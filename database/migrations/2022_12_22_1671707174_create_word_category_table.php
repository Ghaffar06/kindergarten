<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('word_category', function (Blueprint $table) {

            $table->id();


        });
    }

    public function down()
    {
        Schema::dropIfExists('word_category');
    }
}