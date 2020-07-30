<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
    		
    			'category_id' => 1,
    			'name'=>'iPhone 11 Pro Max',
    			'title' => 'iPhone 11 Pro Max 64GB',
    			'description' => 'Iphone 11 pro max 64 GB.',
    			'price' =>29490000,
    			'quantity' => 5,
    			'size' => '158.0 x 77.8 x 8.1 mm',
    			'weight' => '226 g',
    			'color' => 'vàng',
    			'image' => 'abc.jpg',
    			'display'=>'6.5 inchs, Super Retina XDR, 1242 x 2688 Pixels',
    			'os' => 'iOS 13',
    			'storage' => '64GB',
    			'ram' => '4GB',
    			'cpu' =>'Apple A13 Bionic 6 nhân',
    			'gpu'=> 'Apple GPU 4 nhân',
    			'primary_camera' => '12.0 MP',
    			'rear_camera'=> '3 camera 12 MP',
    			'battery'=> '3969 mAh',
    			'warranty'=> '12 tháng',
    			'promotion_price' =>27490000,
    			'start_promotion' => '2020-04-10',
    			'end_promotion' =>'2020-07-30'
    		

    ];
    Product::insert($data);
    }
}
