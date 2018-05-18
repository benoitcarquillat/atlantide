<?php

use Illuminate\Database\Seeder;

class LieuxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            \Illuminate\Support\Facades\DB::table('lieux')->insert([
                'type' => "type $i",
                'nom' => "lieux $i",
                'description' => "lorem ipsum",
                'img' => "img$i.jpg",
                'adresse' => "adresse $i",
                'ville' => "lieux ville $i",
                'codeP' => 60400,
                // 'created_at' => Carbon::parse('2000-01-01'),
                // 'updated_at' => Carbon::parse('2000-01-01'),
            ]);
        }
    }
}
