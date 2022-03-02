<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mesin', function (Blueprint $table) {
            $table->increments('id_mesin');
            $table->integer('id_group');
            $table->string('name_mesin');
            $table->integer('jum_warna');
            $table->double('max_panjang');
            $table->double('max_lebar');
            $table->double('kapasitas');
            $table->double('harga_p_jam');
            $table->integer('inline');
            $table->double('max_pjg_plat');
            $table->double('max_lbr_plat');
            $table->integer('aktif');
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
        Schema::dropIfExists('tb_mesin');
    }
}
