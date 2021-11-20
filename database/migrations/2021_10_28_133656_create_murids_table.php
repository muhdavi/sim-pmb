<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->string('murid');
            $table->string('niss')->nullable()->unique();
            $table->string('nisn')->nullable()->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->boolean('jenis_kelamin');
            $table->string('alamat');
            $table->string('foto')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->foreignId('agama_id')->constrained('agamas')->onUpdate('cascade');
            $table->foreignId('wali_id')->constrained('wali_murids')->onUpdate('cascade');
            $table->foreignId('sekolah_id')->constrained('sekolahs')->onUpdate('cascade');
            $table->foreignId('kelurahan_id')->constrained('kelurahans')->onUpdate('cascade');
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
        Schema::dropIfExists('murids');
    }
}
