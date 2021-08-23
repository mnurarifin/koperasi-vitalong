<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer ('no_bp');
            $table->datetime ('tglbp');
            $table->integer ('id_bagiankredit');
            $table->integer ('id_anggota');
            $table->integer ('jumlah_realisasi');
            $table->integer ('lama_angsuran');
            $table->integer ('jumlah_angsuran');
            $table->integer ('bunga');

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
        Schema::dropIfExists('peminjaman');
    }
}
