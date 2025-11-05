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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('namaMahasiswa');
            $table->string('nim')->unique();
            $table->string("jkel");
            $table->string('alamat');
            $table->string('tampatLahir');
            $table->date('tanggalLahir');
            $table->string('agama');
            $table->string('noTelp')->unique();
            $table->string('noKK');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
