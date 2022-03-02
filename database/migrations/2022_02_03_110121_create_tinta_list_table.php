<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTintaListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tinta_t', function (Blueprint $table) {
            $table->increments('id_tt');
            $table->integer('id_tinta');
            $table->string('name_tinta_t');
            $table->string('info_t');
            $table->double('harga_tinta_t');
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
        Schema::dropIfExists('tb_papergramature');
    }
}
