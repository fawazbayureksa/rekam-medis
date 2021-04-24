<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class TindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tindakan')->insert([
       	'nm_tnd' => 'Swab Test',
       	'harga' => 250000,

       ]);
    }
}
