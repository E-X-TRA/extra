<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTKehadiran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kehadiran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis',11)->index();
            $table->enum('kehadiran', ['hadir', 'tidak hadir']);
            $table->date('tanggal');
            $table->string('keterangan',40);
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
        Schema::dropIfExists('t_kehadiran');
    }
}
