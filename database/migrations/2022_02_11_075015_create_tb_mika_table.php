<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mika', function (Blueprint $table) {
            $table->increments('id_mika');
            $table->string('mika_name');
            $table->string('tamper_mika_type');
            $table->double('mika_harga');
            $table->integer('panjang_mika');
            $table->integer('lebar_mika');
            $table->string('mika_ket');
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
        Schema::dropIfExists('tb_mika');
    }
}
