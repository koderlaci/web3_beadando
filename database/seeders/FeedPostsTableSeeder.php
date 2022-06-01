<?php

namespace Database\Seeders;

use App\Models\FeedPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeedPost::create(["feedName" => "Dolly", "image" => "dolly.jpg","price" => 100, "seller_id" => 1]);
        FeedPost::create(["feedName" => "Bio-Lio", "image" => "bio-lio.jpg", "price" => 200, "seller_id" => 2]);
        FeedPost::create(["feedName" => "Propond", "image" => "propond.jpg", "price" => 300, "seller_id" => 3]);
        FeedPost::create(["feedName" => "INVITAL", "image" => "invital.jpg", "price" => 400, "seller_id" => 4]);
        FeedPost::create(["feedName" => "Tetra", "image" => "tetra.jpg", "price" => 500, "seller_id" => 5]);
    }
}
