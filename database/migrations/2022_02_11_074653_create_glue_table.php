<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_glue', function (Blueprint $table) {
            $table->increments('id_glue');
            $table->string('glue_name');
            $table->string('glue_variable');
            $table->string('glue_ket');
            $table->string('glue_harga');
            $table->string('glue_proses');
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
        Schema::dropIfExists('tb_glue');
    }
}
