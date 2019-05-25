<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetribusiKalibrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retribusi_kalibrasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->length(100);
            $table->string('rentang_ukur')->length(100);
            $table->string('biaya')->length(100);
            $table->string('keterangan')->length(200);
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
        Schema::dropIfExists('retribusi_kalibrasis');
    }
}
