<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detailLokasi', function (Blueprint $table) {
            $table->id();
            $table->string('namaLokasi');
            $table->timestamps();
        });

        Schema::create('kategoriPekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string('namaKategoriPekerjaan');
            $table->timestamps();
        });

        Schema::create('usercompany', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->text('deskripsi_perusahaan');
            $table->string('nomor_telepon',12);
            $table->year('tahun_berdiri');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('detail_alamat_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('usercompany')->onDelete('cascade');
            $table->string('Alamat detail');
            $table->string('provinsi');
            $table->string('kota_kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kode_pos');
            $table->timestamps(); 
        });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoriPekerjaan');
        Schema::dropIfExists('detailLokasi');
        Schema::dropIfExists('usercompany');
        Schema::dropIfExists('detail_alamat_perusahaan');
    }
};
