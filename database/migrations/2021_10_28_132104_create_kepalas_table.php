<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepalas', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama');
            $table->string('nomor_hp');
            $table->foreignId('gpr_id')->nullable()->constrained('gprs')->onDelete('cascade');
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
        Schema::dropIfExists('kepalas');
    }
}
