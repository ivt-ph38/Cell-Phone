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
        		['status' => 'Đang đóng gói'],
        		['status' => 'Đang vân chuyên'],
        		['status' => 'Mod']
        ];
        Status::insert($data);
    }
}
