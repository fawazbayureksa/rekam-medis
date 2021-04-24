<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('nip',20)->unique();
            $table->string('nm_ptg',25);
            $table->text('alm_ptg');
            $table->string('jk_ptg',20);
            $table->date('tgl_lahir');
            $table->string('no_telp_ptg',13);
            $table->string('jabatan',20);
            $table->string('no_ijin_praktek');
            $table->string('pass',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
