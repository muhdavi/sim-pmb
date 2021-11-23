<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuridSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murid_sekolah', function (Blueprint $table) {
            $table->unsignedBigInteger('murid_id')->nullable();
            $table->unsignedBigInteger('sekolah_id')->nullable();
            $table->year('tahun');
            $table->unsignedTinyInteger('pilihan');
            $table->boolean('status')->default(false);
            $table->string('penjelasan')->nullable();
            $table->timestamps();

            $table->primary(['murid_id', 'sekolah_id', 'tahun']);

            $table->foreign('sekolah_id')
                ->references('id')->on('sekolahs')
                ->onDelete('cascade');

            $table->foreign('murid_id')
                ->references('id')->on('murids')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('murid_sekolahs');
    }
}
