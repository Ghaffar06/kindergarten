<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordVoiceRecordTable extends Migration
{
    public function up()
    {
        Schema::create('word_voice_record', function (Blueprint $table) {

            $table->id();
            $table->string('url',200);

        });
    }

    public function down()
    {
        Schema::dropIfExists('word_voice_record');
    }
}