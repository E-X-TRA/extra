<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTKas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pertemuan');
            $table->integer('jumlah_masuk');
            $table->timestamps();
        });
        Schema::table('t_kas',function ($table){
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
        Schema::dropIfExists('t_kas');
    }
}
