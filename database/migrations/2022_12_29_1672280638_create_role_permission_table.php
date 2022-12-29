<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePermissionTable extends Migration
{
    public function up()
    {
        Schema::create('role_permission', function (Blueprint $table) {
            $table->id();
		$table->integer('role_id',);
		$table->integer('permission_id',);
		$table->tinyInteger('read',)->nullable();
		$table->tinyInteger('write',)->nullable();
		$table->tinyInteger('update',)->nullable();
		$table->tinyInteger('delete',)->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('role_permission');
    }
}
