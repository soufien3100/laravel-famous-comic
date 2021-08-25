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
                'name' => 'Dingo',
                'creationDate' => 2000,
                'link' => "cartoon",
                'designer_id' => 1,
            ],
            [
                'name' => 'Hercule',
                'creationDate' => 2001,
                'link' => 'toon',
                'designer_id' => 2,
            ],
            [
                'name' => 'Grogu',
                'creationDate' => 1998,
                'link' => "the stars",
                'designer_id' => 3,
            ]
        ]); 
    }
}
