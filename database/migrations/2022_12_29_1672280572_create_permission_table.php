<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionTable extends Migration
{
    public function up()
    {
        Schema::create('permission', function (Blueprint $table) {
            $table->id();

		$table->string('title',45);

        });
    }

    public function down()
    {
        Schema::dropIfExists('permission');
    }
}
