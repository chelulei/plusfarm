<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntercropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intercrops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produce_id')->unsigned()->nullable();
            $table->unsignedBigInteger('plant_id2')->unsigned()->nullable();
            $table->string('variety2');
            $table->foreign('produce_id')->references('id')->on('produces')->onDelete('restrict');
            $table->foreign('plant_id2')->references('id')->on('plants')->onDelete('restrict');
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
        Schema::dropIfExists('intercrops');
    }
}
