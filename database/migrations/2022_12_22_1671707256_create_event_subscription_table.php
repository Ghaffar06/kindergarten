<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSubscriptionTable extends Migration
{
    public function up()
    {
        Schema::create('event_subscription', function (Blueprint $table) {

            $table->id();

            $table->datetime('date_sub');
            $table->integer('user_id');
            $table->integer('event_id');


        });
    }

    public function down()
    {
        Schema::dropIfExists('event_subscription');
    }
}
