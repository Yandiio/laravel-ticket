<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class stasiunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker = Faker::create('id_ID');
    
    for($i=1; $i<=10 ;$i++){
        DB::table('stasiun')->insert([
            'nomor'=> $faker->numberBetween(100,150),
            'nama_stasiun'=>$faker->name,
            'kota'=>$faker->city,
            'alamat' =>$faker->address,
            'keterangan' => $faker->title

        ]);
       }
    }
}
