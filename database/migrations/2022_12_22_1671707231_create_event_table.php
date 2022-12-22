<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {

            $table->id();
            $table->string('title', 45);
            $table->string('text', 200);
            $table->datetime('announcement_date');
            $table->datetime('event_date');
            $table->integer('level',);

        });
    }

    public function down()
    {
        Schema::dropIfExists('event');
    }
}
