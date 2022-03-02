<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_foil', function (Blueprint $table) {
            $table->increments('id_foil');
            $table->integer('id_foilgroup');
            $table->string('foilgroup_name');
            $table->double('f_panjang');
            $table->double('f_lebar');
            $table->double('f_harga');
            $table->string('f_ket');
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
        Schema::dropIfExists('tb_foil');
    }
}
