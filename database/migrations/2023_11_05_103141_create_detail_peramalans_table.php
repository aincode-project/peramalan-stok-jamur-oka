<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_peramalans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peramalan_id');
            $table->foreign('peramalan_id')->references('id')->on('peramalans');
            $table->date('tanggal');
            $table->integer('nilai_x');
            $table->integer('nilai_y');
            $table->integer('nilai_xx');
            $table->integer('nilai_xy');
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
        Schema::dropIfExists('detail_peramalans');
    }
};
