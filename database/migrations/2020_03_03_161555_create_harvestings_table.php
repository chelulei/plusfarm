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
            $table->unsignedBigInteger('produce_id')->unsigned()->nullable();
            $table->string('task');
            $table->string('cost');
            $table->string('details')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('produce_id')->references('id')->on('produces')->onDelete('restrict');
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
