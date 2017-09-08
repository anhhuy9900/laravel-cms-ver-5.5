<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->default(0);
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('image_id')->default(0);
            $table->text('description')->nullable();
            $table->text('content')->nullable();
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
        Schema::dropIfExists('news');
    }
}
