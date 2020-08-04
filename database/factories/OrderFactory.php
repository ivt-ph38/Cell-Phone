<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\User;
use App\Status;
use App\Deliverer;
use App\Guest;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
	$listUserID= User::pluck('id');
	$listStatusID= Status::pluck('id');
	$listDelivererID= Deliverer::pluck('id');
    $listGuestID=Guest::pluck('id');
    return [
        'user_id' => $faker->randomElement($listUserID),
        'guest_id' => $faker->randomElement($listGuestID),
        'status_id' => $faker->randomElement($listStatusID),
        'deliverer_id' =>$faker->randomElement($listDelivererID),
        'total_price' => rand(10, 1000000), // password
        'delivery_address' => $faker->address,
        'note' => $faker->text
       
    ];
});