<?php

namespace Database\Seeders;

use App\Models\FishPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FishPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FishPost::create(["fishName" => "Harcsa", "image" => "harcsa.jpg","price" => 500, "seller_id" => 1]);
        FishPost::create(["fishName" => "Pisztráng", "image" => "pisztrang.jpg", "price" => 300, "seller_id" => 2]);
        FishPost::create(["fishName" => "Süllő", "image" => "sullo.jpg", "price" => 400, "seller_id" => 3]);
        FishPost::create(["fishName" => "Mandarinhal", "image" => "mandarinhal.jpg", "price" => 600, "seller_id" => 4]);
        FishPost::create(["fishName" => "Lazac", "image" => "lazac.jpg", "price" => 800, "seller_id" => 5]);

    }
}
