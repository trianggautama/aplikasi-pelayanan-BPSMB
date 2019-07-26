<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilKalibrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_kalibrasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('kalibrasi_id');
            $table->string('no_seri')->length(100)->nullable();
            $table->string('no_order')->length(100)->nullable();
            $table->double('alat');
            $table->double('standard');
            $table->double('k');
            $table->double('u');
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
        Schema::dropIfExists('hasil_kalibrasis');
    }
}
