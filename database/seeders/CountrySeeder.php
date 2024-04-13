<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            
        ['libelle'=> 'France'
        ],
        ['libelle'=> 'Belgique',
        ],

        ['libelle'=> 'Allemagne',
        ],
        ['libelle'=> 'Suisse',
        ],

        ['libelle'=> 'Italie',
        ],

        ['libelle'=> 'Luxembourg',
        ],

        ['libelle'=> 'Espagne',
        ],

        ['libelle'=> 'Portugal',
        ],

        ['libelle'=> 'Cote d\'ivoire',
        ],

        ['libelle'=> 'Benin',
        ],

        ['libelle'=> 'Togo',
        ],

        ['libelle'=> 'Congo',
        ],

        ['libelle'=> 'RDC',
        ],
        ['libelle'=> 'Afrique du Sud',
        ],

        ['libelle'=> 'Guadeloupe',
        ],

        ['libelle'=> 'Martinique',
        ],

        ['libelle'=> 'Guyane',
        ],
        ['libelle'=> 'Gabon',
        ],
        ['libelle'=> 'Angola',
        ],
        ['libelle'=> 'Rwanda',
        ],

        ['libelle'=> 'Cameroun',
        ],

        ['libelle'=> 'Nigeria',
        ],

        ['libelle'=> 'angola',
        ],

        ]);
    }
}
