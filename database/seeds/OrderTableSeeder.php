<?php

use HMD\Order;

class OrderTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        Order::truncate();
        Order::unguard();

        $brands = ['nike', 'adidas', 'jordan', 'gucci', 'coach'];

        for($i = 0; $i < 30; $i++)
        {
            Order::create([
                'order_number' => rand(10000,999999),
                'user_id' => 1,
                'brand' => $brands[rand(0,4)],
                'model' => 'air 56',
                'size' => rand(6,15),
            ]);
        }
    }
}