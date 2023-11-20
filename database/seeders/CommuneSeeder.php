<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('communes')->insert([
            ['nom'=> 'Bingerville.',
             'slug' => "bingerville"
            ],

            ['nom'=> 'Abobo',
            'slug' =>"abobo"
           ],

           ['nom'=> 'Cocody.',
           'slug' =>"Cocody"
           ],

           ['nom'=> 'Anyama',
           'slug' => "anyama"
           ],

           ['nom'=> 'Treichville',
           'slug' => "treichville"
           ],

           ['nom'=> 'Adjamé',
           'slug' =>  "adjame"
           ],

           ['nom'=> 'Brofodoumé',
           'slug' =>  "brofodoumé"
           ],

           ['nom'=> 'Port Buuet',
           'slug' =>  "port-bouet"
           ],
        ]);
    }
}
