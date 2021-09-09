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
            'name' => 'Meyer, Ralph',
            'birthday' => 1971,
            'nationality' => "France",
            
        ],
        [
            'name' => 'Meyer, Ralph',
            'birthday' => 1971,
            'nationality' => "France",
            
        ],
        [
            'name' => 'Meyer, Ralph',
            'birthday' => 1971,
            'nationality' => "France",
            
        ],
        [
            'name' => 'Hergé',
            'birthday' => 1927,
            'nationality' => "Belge",
            
        ],
        [
            'name' => 'Hugo Pratt',
            'birthday' => 1920,
            'nationality' => 'Italien',
           
        ],
        [
            'name' => 'Carloni, Stefano',
            'birthday' => 1988,
            'nationality' => "Italie",
            
        ],
        [
            'name' => 'Carloni, Stefano',
            'birthday' => 1988,
            'nationality' => "Italie",
            
        ],
        [
            'name' => 'Carloni, Stefano',
            'birthday' => 1988,
            'nationality' => "Italie",
            
        ],
        [
            'name' => 'Carloni, Stefano',
            'birthday' => 1988,
            'nationality' => "Italie",
            
        ],
        
        
        ]) ;
    }
}
