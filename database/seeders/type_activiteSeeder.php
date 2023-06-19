<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class type_activiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        
        DB::table("type_activites")->insert([
            'type' => 'Réalisations phares',
        ]);

          
        DB::table("type_activites")->insert([
            'type' => 'Activités en cours',
        ]);

        DB::table("type_activites")->insert([
            'type' => 'Actvités en préparation',
        ]);
    }
}
