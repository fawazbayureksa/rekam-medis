<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasien')->insert([
        	['no_klinik'=>5,
			'nm_pasien' => 'Nanna',
        	'alm_pasien'=>'Barombong',
        	'jk_pasien' => 'Wanita',
        	'tgl_lahir_pasien'=>'2000-06-04',
        	'no_telp_pasien' => '082394418669',
        	'umur' => 20,
	        ],
	        ['no_klinik'=>6,
			'nm_pasien' => 'fawaz',
        	'alm_pasien'=>'Bajeng',
        	'jk_pasien' => 'Pria',
        	'tgl_lahir_pasien'=>'2000-06-08',
        	'no_telp_pasien' => '082259499747',
        	'umur' => 20,
	        ],
        ]);
    }
}
