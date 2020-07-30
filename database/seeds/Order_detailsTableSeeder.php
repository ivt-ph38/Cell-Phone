<?php
use App\Order_detail;
use Illuminate\Database\Seeder;

class Order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[ 
        	[
        		'order_id' => 1,
        		'product_id' => 1,
        		'price' => 29490000,
        		'sale_quantity'=> 1

        	],

        	
        ];
        Order_detail::insert($data);
    }
}
