<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendapatanPengujiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatan_pengujians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('pengujian_id')->nullable();
            $table->string('pendapatan')->length(100);
            $table->foreign('pengujian_id')->references('id')->on('pengujians')->onDelete('cascade');
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
        Schema::dropIfExists('pendapatan_pengujians');
    }
}
