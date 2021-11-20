<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('npsn')->unique();
            $table->string('foto')->default('disdikbud.jpg');
            $table->string('sekolah');
            $table->string('alamat');
            $table->enum('akreditasi', ['A', 'B', 'C', 'TT'])->default('TT');
            $table->foreignId('kepala_id')->constrained('kepalas')->onUpdate('cascade');
            $table->foreignId('kelurahan_id')->nullable()->constrained('kelurahans')->onUpdate('cascade');
            $table->foreignId('koordinator_wilayah_id')->constrained('koordinator_wilayahs')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekolahs');
    }
}
