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
<<<<<<< HEAD
        		['id'=>1, 'status' => 'Đang đóng gói'],
        		['id'=>2, 'status' => 'Đang vận chuyển'],
                ['id'=>3, 'status' => 'Đã giao'],
        		['id'=>4, 'status' => 'Đã Hủy']
                
=======
        		['status' => 'Mới'],
        		['status' => 'Đang xử lý'],
        		['status' => 'Đã giao hàng'],
                ['status' => 'Đã thanh toán'],
                ['status' => 'Đã hủy']
>>>>>>> admin
        ];
        Status::insert($data);
    }
}
