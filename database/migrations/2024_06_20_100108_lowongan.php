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
            $table->foreign('id','fkusercompany')->references('id')->on('userCompany')->onDelete('cascade');
            $table->string('divisiPekerjaan');
            $table->string('deskripsiPekerjaan');
            $table->foreign('id','fkdetailLokasi')->references('id')->on('detailLokasi')->onDelete('cascade');
            $table->foreign('id','fkKategoriPekerjaan')->references('id',)->on('kategoriPekerjaan')->onDelete('cascade');
            $table->string('kualifikasi');
            $table->set('tipePekerjaan',['hybrid','WFO','WFH']);
            $table->string('universitas');
            $table->string('gelar');
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
