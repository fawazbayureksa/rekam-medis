<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
        	'nip' => '12345678',
        	'nm_ptg'=> 'Baso',
        	'alm_ptg'=>'Jl Baso dg Ngawing',
        	'jk_ptg' =>'Pria',
        	'tgl_lahir'=> '1980-08-03',
        	'no_telp_ptg' => '082384747227',
        	'no_ijin_praktek' => '50',
        	'jabatan' => 'Dokter',
        	'pass' => 'Baso123',

        ]);
    }
}
