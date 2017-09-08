<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_name', 200)->nullable();
            $table->text('role_type')->nullable();
            $table->smallInteger('role_status')->default(0);
            $table->smallInteger('access')->default(0);
            $table->integer('updated_date')->nullable();
            $table->integer('created_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_roles');
    }
}
