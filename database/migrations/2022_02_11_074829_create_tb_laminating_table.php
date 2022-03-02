<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLaminatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_laminating', function (Blueprint $table) {
            $table->increments('id_laminate');
            $table->string('laminate_name');
            $table->string('tamper_type');
            $table->double('panjang_laminate');
            $table->double('lebar_laminate');
            $table->double('laminate_harga');
            $table->string('ket_laminate');
            $table->integer('id_laminate_group');
            $table->date('begda');
            $table->date('endda');
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
        Schema::dropIfExists('tb_laminating');
    }
}
