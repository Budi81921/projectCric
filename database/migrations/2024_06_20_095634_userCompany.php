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
        Schema::create('kategoriPekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string('namaKategoriPekerjaan');
            $table->timestamps();
        });

        Schema::create('usercompany', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fkusercompany');
            $table->foreign('fkusercompany')->references('id')->on('users')->onDelete('cascade');
            $table->string('foto_profil_company')->nullable();
            $table->string('background_profil_company')->nullable();
            $table->text('deskripsi_perusahaan')->nullable();
            $table->string('nomor_telepon', 12)->nullable();
            $table->year('tahun_berdiri')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });

        Schema::create('detail_alamat_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fkusercompany');
            $table->foreign('fkusercompany')->references('id')->on('usercompany')->onDelete('cascade');
            $table->string('Alamat_detail')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota_kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kode_pos')->nullable();
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
