<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->unsignedBigInteger('farm_id')->unsigned()->nullable();
            $table->string('size');
            $table->unsignedBigInteger('plant_id')->unsigned()->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('variety_id')->unsigned();
            $table->string('start_date');
            $table->string('end_date');
            $table->string('farm_mode');
            $table->string('status')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('farm_id')->references('id')->on('farms')->onDelete('cascade');
            $table->foreign('plant_id')->references('id')->on('plants')->onDelete('cascade');
            $table->foreign('variety_id')->references('id')->on('varieties')->onDelete('cascade');
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
        Schema::dropIfExists('produces');
    }
}
