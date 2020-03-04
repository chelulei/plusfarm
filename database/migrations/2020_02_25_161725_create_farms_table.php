<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->string('farm_name');
            $table->string('size');
            $table->string('ownership');
            $table->string('soiltype');
            $table->string('soilph');
            $table->string('humidity');
            $table->string('mechanization');
            $table->string('county');
            $table->string('sub_county');
            $table->string('ward');
            $table->string('street');
            $table->string('gps')->nullable();
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farms');
    }
}
