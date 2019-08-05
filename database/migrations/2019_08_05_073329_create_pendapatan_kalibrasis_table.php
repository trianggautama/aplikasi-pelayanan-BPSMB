<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendapatanKalibrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatan_kalibrasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('kalibrasi_id')->nullable();
            $table->string('pendapatan')->length(100);
            $table->foreign('kalibrasi_id')->references('id')->on('kalibrasis')->onDelete('cascade');
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
        Schema::dropIfExists('pendapatans');
    }
}
