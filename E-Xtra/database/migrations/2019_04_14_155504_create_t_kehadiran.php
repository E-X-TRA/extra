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
            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('id_pertemuan');
            $table->enum('kehadiran', ['hadir', 'tidak hadir']);
            $table->timestamps();
        });
        Schema::table('t_kehadiran',function ($table){
            $table->foreign('id_anggota')
            ->references('id')->on('t_anggota')
            ->onDelete('cascade');
            $table->foreign('id_pertemuan')
            ->references('id')->on('t_pertemuan')
            ->onDelete('cascade');
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
