<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->nullable();
            $table->text('value')->nullable();
            $table->string('type', 20)->nullable();
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
        Schema::dropIfExists('property_data');
    }
}
