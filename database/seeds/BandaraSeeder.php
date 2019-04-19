<?php

use Illuminate\Database\Seeder;

class BandaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    for($i = 1; $i <= 10; $i++){
        DB::table('bandara')->insert([
        	'nama_bandara' => 'Halim',
        	'kota' => 'Bandung',
        	'alamat' => 'Jl. Petakan aja',
        	'keterangan' => 'Uji Coba Boss'
        ]);
    }
    }
}
