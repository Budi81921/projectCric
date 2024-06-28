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
            $table->unsignedBigInteger('fkidusercandidate');
            $table->foreign('fkidusercandidate')->references('id')->on('users')->onDelete('cascade');
            $table->dateTime('tanggal_lahir')->nullable();
            $table->string('nomor_handphone',12)->nullable();
            $table->string('alamat')->nullable();
            $table->enum('gender',['pria','wanita'])->nullable();
            $table->string('universitas')->nullable();
            $table->string('gelar')->nullable();
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
