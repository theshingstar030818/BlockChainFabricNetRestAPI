<?php

use Illuminate\Database\Seeder;

use App\EsnbcSubset;

class EsnbcSubsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('esnbc_subsets')->delete();

        EsnbcSubset::create(['batches_info_id' => '1000001', 
            'production_date' => '2019-10-12', 
            'best_before_date' => '2020-10-12',
            'net_weight' => '100',
            'dimensions' => '3X4X5',
            'customer_purchase_order_number' => '122001',
            'shipment_tracking_number' => '112231'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000001', 
            'production_date' => '2019-10-13', 
            'best_before_date' => '2020-10-13',
            'net_weight' => '200',
            'dimensions' => '3X4X50',
            'customer_purchase_order_number' => '122003',
            'shipment_tracking_number' => '112235'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000001', 
            'production_date' => '2019-10-14', 
            'best_before_date' => '2020-10-14',
            'net_weight' => '300',
            'dimensions' => '30X4X5',
            'customer_purchase_order_number' => '122005',
            'shipment_tracking_number' => '112239'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000001', 
            'production_date' => '2019-10-15', 
            'best_before_date' => '2020-10-15',
            'net_weight' => '400',
            'dimensions' => '3X40X5',
            'customer_purchase_order_number' => '122007',
            'shipment_tracking_number' => '112243'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000002', 
            'production_date' => '2019-10-16', 
            'best_before_date' => '2020-10-16',
            'net_weight' => '500',
            'dimensions' => '3X4X51',
            'customer_purchase_order_number' => '122009',
            'shipment_tracking_number' => '112247'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000002', 
            'production_date' => '2019-10-17', 
            'best_before_date' => '2020-10-17',
            'net_weight' => '100',
            'dimensions' => '3X4X52',
            'customer_purchase_order_number' => '122011',
            'shipment_tracking_number' => '112251'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000003', 
            'production_date' => '2019-10-18', 
            'best_before_date' => '2020-10-18',
            'net_weight' => '700',
            'dimensions' => '3X4X53',
            'customer_purchase_order_number' => '122013',
            'shipment_tracking_number' => '112255'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000003', 
            'production_date' => '2019-10-19', 
            'best_before_date' => '2020-10-19',
            'net_weight' => '800',
            'dimensions' => '3X4X54',
            'customer_purchase_order_number' => '122015',
            'shipment_tracking_number' => '112259'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000004', 
            'production_date' => '2019-10-20', 
            'best_before_date' => '2020-10-20',
            'net_weight' => '900',
            'dimensions' => '3X4X55',
            'customer_purchase_order_number' => '122017',
            'shipment_tracking_number' => '112263'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000004', 
            'production_date' => '2019-10-21', 
            'best_before_date' => '2020-10-21',
            'net_weight' => '1000',
            'dimensions' => '3X4X56',
            'customer_purchase_order_number' => '122019',
            'shipment_tracking_number' => '112267'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000005', 
            'production_date' => '2019-10-22', 
            'best_before_date' => '2020-10-22',
            'net_weight' => '1100',
            'dimensions' => '3X4X57',
            'customer_purchase_order_number' => '122021',
            'shipment_tracking_number' => '112271'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000005', 
            'production_date' => '2019-10-23', 
            'best_before_date' => '2020-10-23',
            'net_weight' => '1200',
            'dimensions' => '3X4X58',
            'customer_purchase_order_number' => '122023',
            'shipment_tracking_number' => '112275'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000006', 
            'production_date' => '2019-10-24', 
            'best_before_date' => '2020-10-24',
            'net_weight' => '1300',
            'dimensions' => '3X4X59',
            'customer_purchase_order_number' => '122025',
            'shipment_tracking_number' => '112279'
            ]);
        EsnbcSubset::create(['batches_info_id' => '1000001', 
            'production_date' => '2019-10-25', 
            'best_before_date' => '2020-10-25',
            'net_weight' => '1400',
            'dimensions' => '4X4X50',
            'customer_purchase_order_number' => '122027',
            'shipment_tracking_number' => '112283'
            ]);
    }
}
