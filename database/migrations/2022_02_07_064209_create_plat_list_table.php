<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_plat', function (Blueprint $table) {
            $table->increments('id_plat');
            $table->integer('id_mesin');
            $table->string('plat_name');
            $table->double('harga_plat');
            $table->string('info_plat');
            $table->integer('id_plat_group');
            $table->date('begda');
            $table->date('endda');
            $table->double('length_plat');
            $table->double('width_plat');
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
        Schema::dropIfExists('tb_plat');
    }
}
