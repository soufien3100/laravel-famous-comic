<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('characters')->insert([
            [
                'name' => 'Jonas',
                'creationDate' => 2021,
                'link' => "Undertaker",
                'designer_id' => 7,
            ],
            [
                'name' => 'Crow',
                'creationDate' => 2021,
                'link' => "Undertaker",
                'designer_id' => 8,
            ],
            [
                'name' => 'Rose',
                'creationDate' => 2021,
                'link' => "Undertaker",
                'designer_id' => 9,
            ],
         
            [
                'name' => 'Tintin',
                'creationDate' => 1929,
                'link' => "Les Aventures de Tintin",
                'designer_id' => 1,
            ],
            [
                'name' => 'Dupond et Dupont',
                'creationDate' => 2001,
                'link' => 'Les Aventures de Tintin',
                'designer_id' => 2,
            ],
            [
                'name' => 'Capitaine Haddock',
                'creationDate' => 1944,
                'link' => "Les Aventures de Tintin",
                'designer_id' => 3,
            ],
            [
                'name' => 'Barbe-Rouge',
                'creationDate' => 2021,
                'link' => "Les chiens de mer",
                'designer_id' => 4,
            ],
            [
                'name' => 'Éric',
                'creationDate' => 2021,
                'link' => "Les chiens de mer",
                'designer_id' => 5,
            ],
            [
                'name' => 'Baba',
                'creationDate' => 2021,
                'link' => "Les chiens de mer",
                'designer_id' => 6,
            ]
           


        ]); 
    }
}
