<?php
use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        		['status' => 'Mới'],
        		['status' => 'Đang xử lý'],
        		['status' => 'Đã giao hàng'],
                ['status' => 'Đã thanh toán'],
                ['status' => 'Đã hủy']
        ];
        Status::insert($data);
    }
}
