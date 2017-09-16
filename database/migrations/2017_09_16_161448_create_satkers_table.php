<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satkers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unitutama_id')->unsigned();
            $table->string('kd_satker');
            $table->string('nama_satker');
            $table->string('akronim');
            $table->timestamps();

            $table->foreign('unitutama_id')->references('id')->on('unitutamas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satkers');
    }
}
