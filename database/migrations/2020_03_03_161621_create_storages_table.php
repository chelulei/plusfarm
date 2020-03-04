<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storages', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('user_id')->unsigned()->nullable();
             $table->unsignedBigInteger('farm_id')->unsigned()->nullable();
            $table->string('task');
            $table->string('cost');
            $table->string('details');
            $table->string('remarks');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('farm_id')->references('id')->on('farms')->onDelete('cascade');
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
        Schema::dropIfExists('storages');
    }
}
