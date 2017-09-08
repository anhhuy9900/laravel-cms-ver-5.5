<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->default(0);
            $table->string('username', 150)->unique();
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->string('user_token')->nullable();
            $table->integer('permission_limit')->default(0);
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('system_users');
    }
}
