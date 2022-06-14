<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create(["userId" => "1", "amount" => 0]);
        Order::create(["userId" => "2", "amount" => 0]);
        Order::create(["userId" => "3", "amount" => 0]);
        Order::create(["userId" => "4", "amount" => 0]);
        Order::create(["userId" => "5", "amount" => 0]);
    }
}
