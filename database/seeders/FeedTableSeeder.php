<?php

namespace Database\Seeders;

use App\Models\Feed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feed::create(["feedName" => "Dolly", "image" => "dolly.jpg","price" => 100]);
    }
}
