<?php

use Illuminate\Database\Seeder;

use App\Esnbc;

class EsnbcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esnbcs')->delete();

        Esnbc::create(['batches_info' => '1000001', 
            'product_id' => 'NS0001', 
            'product_name' => 'Organic Koroneiki Extra Virgin Olive Oil',
            'certification' => 'Olive Oil',
            'supplier' => 'Organic Roots Oliver, Inc',
            'origin' => 'Greek',
            'price' => '35'
            ]);
        Esnbc::create(['batches_info' => '1000002', 
            'product_id' => 'DS00123', 
            'product_name' => 'NoteCom',
            'certification' => 'San Joaquin Valley OOC',
            'supplier' => 'Organic Roots Oliver, Inc',
            'origin' => 'Greek',
            'price' => '250'
            ]);
        Esnbc::create(['batches_info' => '1000003', 
            'product_id' => 'SD12344', 
            'product_name' => 'iPhone',
            'certification' => 'California Olive Oil Council OOC',
            'supplier' => 'Organic Roots Oliver, Inc',
            'origin' => 'Japan',
            'price' => '400'
            ]);
        Esnbc::create(['batches_info' => '1000004', 
            'product_id' => 'AS17754', 
            'product_name' => 'Android',
            'certification' => 'California State Fair OOC',
            'supplier' => 'Jedwards International, Inc',
            'origin' => 'USA',
            'price' => '350'
            ]);
        Esnbc::create(['batches_info' => '1000005', 
            'product_id' => 'GH3424', 
            'product_name' => 'Mouse',
            'certification' => 'Los Angeles IOOC',
            'supplier' => 'Jedwards International, Inc',
            'origin' => 'South Africa',
            'price' => '14'
            ]);
        Esnbc::create(['batches_info' => '1000006', 
            'product_id' => 'TR1231', 
            'product_name' => 'NoteCom',
            'certification' => 'Olive Japan IOOC',
            'supplier' => 'www.olio2go.com',
            'origin' => 'Japan',
            'price' => '500'
            ]);
        Esnbc::create(['batches_info' => '1000007', 
            'product_id' => 'RE34234', 
            'product_name' => 'PC',
            'certification' => 'Central Coast OOC',
            'supplier' => 'www.olio2go.com',
            'origin' => 'Italia',
            'price' => '600'
            ]);
    }
}
