<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('monitoring_id')->unsigned();
            $table->integer('berkas_id')->unsigned();
            $table->integer('proses_id')->unsigned();
            $table->date('proses_tgl');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('monitoring_id')->references('id')->on('monitorings')->onDelete('CASCADE');
            $table->foreign('berkas_id')->references('id')->on('berkas')->onDelete('CASCADE');
            $table->foreign('proses_id')->references('id')->on('proses')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
