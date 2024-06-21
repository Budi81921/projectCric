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
        Schema::create('pelamarKerja', function (Blueprint $table) {
            $table->id();
            $table->foreign('id','fklowongankerja')->references('id')->on('lowonganKerja');
            $table->foreign('id','fkusercandidate')->references('id')->on('userCandidate');
            $table->set('status',['diterima','proses','ditolak']);
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
