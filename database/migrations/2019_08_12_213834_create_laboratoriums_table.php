<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoriums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_laboratorium')->length(100);
            $table->string('nama_pj')->length(100);
            $table->string('keterangan')->length(191);
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
        Schema::dropIfExists('laboratoriums');
    }
}
