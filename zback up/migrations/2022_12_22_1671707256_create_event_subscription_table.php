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

        });
    }

    public function down()
    {
        Schema::dropIfExists('event_subscription');
    }
}
