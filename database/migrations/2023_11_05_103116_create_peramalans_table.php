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
        Schema::create('peramalans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('tanggal_peramalan')->useCurrent();
            $table->date('tanggal_awal_data');
            $table->date('tanggal_akhir_data');
            $table->integer('jumlah_data');
            $table->integer('total_x')->nullable();
            $table->integer('total_y')->nullable();
            $table->integer('total_xx')->nullable();
            $table->integer('total_xy')->nullable();
            $table->float('nilai_a')->nullable();
            $table->float('nilai_b')->nullable();
            $table->float('nilai_mape')->nullable();
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
        Schema::dropIfExists('peramalans');
    }
};
