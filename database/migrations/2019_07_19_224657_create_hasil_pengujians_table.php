<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilPengujiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_pengujians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('pengujian_id');
            $table->string('kode')->length(50);
            $table->string('no_bpsmb')->length(50);
            $table->double('kadar_air');
            $table->double('kadar_abu');
            $table->double('kadar_protein');
            $table->double('kadar_lemak');
            $table->double('kadar_serat');
            $table->double('energi_metabolisme');
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
        Schema::dropIfExists('hasil_pengujians');
    }
}
