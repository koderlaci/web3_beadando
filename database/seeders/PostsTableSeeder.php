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
        Post::create(["fishName" => "Harcsa", "price" => 500, "seller_id" => 1]);
        Post::create(["fishName" => "Pisztráng", "price" => 300, "seller_id" => 2]);
        Post::create(["fishName" => "Süllő", "price" => 400, "seller_id" => 3]);
        Post::create(["fishName" => "Mandarinhal", "price" => 600, "seller_id" => 4]);
        Post::create(["fishName" => "Lazac", "price" => 800, "seller_id" => 5]);

    }
}
