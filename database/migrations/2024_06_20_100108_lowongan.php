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
        Schema::create('lowonganKerja', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fkusercompany');
            $table->foreign('fkusercompany')->references('id')->on('userCompany')->onDelete('cascade');
            $table->string('title_lowongan');
            $table->string('deskripsiPekerjaan',255);
            $table->string('kota_lowongan')->nullable();
            $table->unsignedBigInteger('fkKategoriPekerjaan');
            $table->foreign('id','fkKategoriPekerjaan')->references('id',)->on('kategoriPekerjaan')->onDelete('cascade');
            $table->string('kualifikasi',255);
            $table->set('tipePekerjaan',['hybrid','WFO','WFH']);
            $table->string('pendidikan');
            $table->string('pengalaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowonganKerja');
    }
};
