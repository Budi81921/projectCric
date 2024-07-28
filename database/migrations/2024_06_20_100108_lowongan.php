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
        Schema::create('lowongankerja', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fkusercompany');
            $table->foreign('fkusercompany')->references('id')->on('userCompany')->onDelete('cascade');
            $table->string('title_lowongan');
            $table->text('deskripsiPekerjaan');
            $table->enum('tipePekerjaan',['Full_Time','Freelance','Parti_Time','Internship'])->nullable();
            $table->unsignedBigInteger('fkKategoriPekerjaan')->nullable();
            $table->foreign('fkKategoriPekerjaan')->references('id',)->on('kategoripekerjaan')->onDelete('cascade');
            $table->text('kualifikasi');
            $table->integer('gaji_minimal')->nullable();
            $table->integer('gaji_maximal')->nullable();
            $table->enum('lokasi',['Hybrid','WFO','WFH']);
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
