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
        Schema::create('data_kosts', function (Blueprint $table) {
            $table->id('kost_id');
            $table->string('nama_kost', 100);
            $table->string('jenis_kost');
            $table->string('deskripsi');
            $table->string('tahun_kost_dibangun');
            $table->string('peraturan_kost');
            $table->string('fasilitas_kost');
            $table->string('ukuran_kamar');
            $table->integer('jumlah_semua_kamar');
            $table->integer('jumlah_kamar_tersedia');
            $table->string('harga_per_bulan');
            $table->string('alamat');
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
        Schema::dropIfExists('data_kosts');
    }
};
