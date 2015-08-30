<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('module_name');
            $table->boolean('list')->default(0);
            $table->boolean('show')->default(0);
            $table->boolean('create')->default(0);
            $table->boolean('coppy')->default(0);
            $table->boolean('update')->default(0);
            $table->boolean('delete')->default(0);
            $table->boolean('search')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permissions');
    }
}
