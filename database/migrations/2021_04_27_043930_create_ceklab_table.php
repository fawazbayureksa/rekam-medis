<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCeklabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceklab', function (Blueprint $table) {
            $table->id();
            $table->string('nm_pasien',30);
            $table->string('nip',20);
            $table->string('nm_ceklab',30);
            $table->text('hasil_cek');
            $table->text('ket');
            $table->float('harga');
            $table->string('no_layanan',5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ceklab');
    }
}
