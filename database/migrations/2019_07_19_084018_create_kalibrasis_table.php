<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKalibrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalibrasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('user_id');
            $table->unsignedbigInteger('permohonan_kalibrasi_id');
            $table->date('tanggal')->nullable();
            $table->tinyInteger('metode_pembayaran')->default(0);
            $table->string('estimasi')->length(100)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('lainnya')->length(100)->nullable();
            $table->text('keterangan')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('permohonan_kalibrasi_id')->references('id')->on('permohonan_kalibrasis')->onDelete('cascade');
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
        Schema::dropIfExists('kalibrasis');
    }
}
