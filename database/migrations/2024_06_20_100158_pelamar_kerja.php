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
        Schema::create('detail_lowongan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fklowongankerja');
            $table->foreign('fklowongankerja')->references('id')->on('lowonganKerja')->onDelete('cascade');
            $table->unsignedBigInteger('fkusercandidate');
            $table->foreign('fkusercandidate')->references('id')->on('userCandidate');
            $table->set('status',['diterima','proses','ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamarKerja');
    }
};
