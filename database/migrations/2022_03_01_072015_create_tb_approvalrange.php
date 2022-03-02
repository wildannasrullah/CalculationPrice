<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbApprovalrange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_approvalrange', function (Blueprint $table) {
            $table->increments('id_apr');
            $table->integer('min');
            $table->integer('max');
            $table->double('min_prof');
            $table->double('max_prof');
            $table->string('status');
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
        Schema::dropIfExists('tb_approvalrange');
    }
}
