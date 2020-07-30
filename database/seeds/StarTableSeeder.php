<?php

use Illuminate\Database\Seeder;

class StarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Star::class,10)->create();
    }
}
