<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengujiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengujians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('user_id');
            $table->unsignedbigInteger('permohonan_pengujian_id');
            $table->date('tanggal')->nullable();
            $table->tinyInteger('metode_pembayaran')->default(0);
            $table->string('estimasi')->length(100)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('lainnya')->length(100)->nullable();
            $table->text('keterangan')->nullable();
            $table->string('sertifikat')->length(100)->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('permohonan_pengujian_id')->references('id')->on('permohonan_pengujians')->onDelete('cascade');
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
        Schema::dropIfExists('pengujians');
    }
}
