<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbInlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inline', function (Blueprint $table) {
            $table->increments('id_inline');
            $table->string('name_inline');
            $table->string('kategori_inline');
            $table->string('harga_inline');
            $table->string('keterangan');
            $table->string('inline_variable');
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
        Schema::dropIfExists('tb_inline');
    }
}
