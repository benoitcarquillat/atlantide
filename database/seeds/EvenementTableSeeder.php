<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EvenementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            \Illuminate\Support\Facades\DB::table('evenement')->insert([
                'type' => "type $i",
                'nom' => "nom $i",
                'description' => "lorem ipsum",
                'img' => "null",
                'dateDebut' => Carbon::parse('2000-01-01'),
                'dateFin' => Carbon::parse('2000-01-01'),
                'adresse' => "adresse $i",
                'ville' => "ville $i",
                'codeP' => 60400,
            ]);
        }
    }
}
