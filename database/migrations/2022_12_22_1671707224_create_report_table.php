<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {

            $table->id();
            $table->string('title', 45);
            $table->string('message', 250);
            $table->datetime('date_repo');
            $table->string('handled', 1);
            $table->integer('user_id'); 

        });
    }

    public function down()
    {
        Schema::dropIfExists('report');
    }
}
