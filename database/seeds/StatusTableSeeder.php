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
        		['id'=>1, 'status' => 'Đang đóng gói'],
        		['id'=>2, 'status' => 'Đang vận chuyển'],
                ['id'=>3, 'status' => 'Đã giao'],
        		['id'=>4, 'status' => 'Đã Hủy']
                
        ];
        Status::insert($data);
    }
}
