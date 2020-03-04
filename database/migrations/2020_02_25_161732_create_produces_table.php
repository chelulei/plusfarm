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
             $table->unsignedBigInteger('plant_id')->unsigned()->nullable();
            $table->string('variety');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('farm_mode');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('farm_id')->references('id')->on('farms')->onDelete('cascade');
            $table->foreign('plant_id')->references('id')->on('plants')->onDelete('cascade');
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
