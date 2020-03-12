<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHarvestingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harvestings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->unsignedBigInteger('farm_id')->unsigned()->nullable();
            $table->string('task');
            $table->string('cost');
            $table->string('details')->nullable();
            $table->string('remarks')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('farm_id')->references('id')->on('farms')->onDelete('restrict');
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
        Schema::dropIfExists('harvestings');
    }
}
