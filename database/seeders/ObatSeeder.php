<?php
namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('obat')->insert([
         	[
	            'nm_obat' => 'Paracetamol',
	            'harga' => 8000,
         	],
         	[
	            'nm_obat' => 'Bodrex',
	            'harga' => 5000,
         	],
         	[
	            'nm_obat' => 'Stopcold',
	            'harga' => 4000,
         	],
            [
                'nm_obat' => 'Amoxcilin',
                'harga' => 6000,
            ],
            [
                'nm_obat' => 'Promaag',
                'harga' => 5000,
            ],
        ]);
    }
}
