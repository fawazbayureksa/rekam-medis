<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->integer('no_rawat');
            $table->integer('id_pasien');
            $table->integer('id_dokter');
            $table->integer('id_obat');
            $table->text('diagnosa');
            $table->integer('berat_badan');
            $table->integer('tensi');
            $table->integer('suhu_tubuh');
            $table->text('ket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaan');
    }
}
