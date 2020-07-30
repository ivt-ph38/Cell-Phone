<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
        		['name' => 'Admin'],
        		['name' => 'User'],
        		['name' => 'Mod']
        ];
        Role::insert($data);
    }
}
