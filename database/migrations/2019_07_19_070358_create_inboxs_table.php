<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInboxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inboxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('user_id');
            $table->unsignedbigInteger('permohonan_kalibrasi_id')->nullable();
            $table->unsignedbigInteger('permohonan_pengujian_id')->nullable();
            $table->string('subjek')->length(50);
            $table->date('tanggal');
            $table->text('keterangan');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('permohonan_kalibrasi_id')->references('id')->on('permohonan_kalibrasis')->onDelete('cascade');
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
        Schema::dropIfExists('inboxs');
    }
}
