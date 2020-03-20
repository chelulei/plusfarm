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
            $table->string('slug')->nullable();
            $table->string('size');
            $table->string('ownership');
            $table->string('soiltype')->nullable();
            $table->string('soilph')->nullable();
            $table->string('humidity')->nullable();
            $table->string('mechanization')->nullable();
            $table->string('county');
            $table->string('sub_county')->nullable();
            $table->string('village')->nullable();
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
