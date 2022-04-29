<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(["fishName" => "Harcsa", "image" => "harcsa.jpg","price" => 500, "seller_id" => 1]);
        Post::create(["fishName" => "Pisztráng", "image" => "pisztrang.jpg", "price" => 300, "seller_id" => 2]);
        Post::create(["fishName" => "Süllő", "image" => "sullo.jpg", "price" => 400, "seller_id" => 3]);
        Post::create(["fishName" => "Mandarinhal", "image" => "mandarinhal.jpg", "price" => 600, "seller_id" => 4]);
        Post::create(["fishName" => "Lazac", "image" => "lazac.jpg", "price" => 800, "seller_id" => 5]);

    }
}
