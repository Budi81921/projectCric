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
        Schema::create('userCandidate', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->dateTime('tanggal_lahir');
            $table->string('nomor_handphone',12);
            $table->string('alamat');
            $table->enum('gender',['laki-laki','perempuan']);
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
        Schema::dropIfExists('userCandidate');
    }
};
