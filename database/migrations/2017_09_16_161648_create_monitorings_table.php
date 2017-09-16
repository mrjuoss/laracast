<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produk_id')->unsigned();
            $table->string('atas_nama');
            $table->integer('satker_id')->unsigned();
            $table->string('kd_satker');
            $table->integer('user_id')->unsigned();
            $table->boolean('keterangan');
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('CASCADE');
            $table->foreign('satker_id')->references('id')->on('satkers')->onDelete('CASCADE');
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
        Schema::dropIfExists('monitorings');
    }
}
