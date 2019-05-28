<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetribusiPengujiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retribusi_pengujians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('komoditi')->length(100);
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
        Schema::dropIfExists('retribusi_pengujians');
    }
}
