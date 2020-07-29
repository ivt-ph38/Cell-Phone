<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(DelivererTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(GuestTableSeeder::class);
       
    }
}
