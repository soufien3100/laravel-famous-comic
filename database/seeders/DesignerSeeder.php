<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
        [
            'name' => 'Jack',
            'birthday' => 2000,
            'nationality' => "Français",
            
        ],
        [
            'name' => 'Alain',
            'birthday' => 2001,
            'nationality' => 'Français',
           
        ],
        [
            'name' => 'Charlie',
            'birthday' => 1998,
            'nationality' => "Americain",
            
        ]
        ]) ;
    }
}
