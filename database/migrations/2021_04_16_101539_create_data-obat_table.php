<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('data-obat',function(Blueprint $table){

        $table->id();
        $table->string('nm_obat',50);
        $table->integer('harga');
       });


       Schema::rename('data-obat', 'obat');
           
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfexists('data-obat');
    }
}
