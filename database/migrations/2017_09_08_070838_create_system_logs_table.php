<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->default(0);
            $table->integer('module_id')->default(0);
            $table->integer('nid')->default(0);
            $table->string('title', 255)->nullable();
            $table->string('type', 255)->nullable();
            $table->integer('created_date')->nullable();
            $table->integer('deleted_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_logs');
    }
}
