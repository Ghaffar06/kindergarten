<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterPhotoTable extends Migration
{
    public function up()
    {
        Schema::create('letter_photo', function (Blueprint $table) {

            $table->id();
            $table->string('url',200);
		$table->string('letter',1);

        });
    }

    public function down()
    {
        Schema::dropIfExists('letter_photo');
    }
}