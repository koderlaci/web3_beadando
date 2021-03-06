<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fish_posts', function (Blueprint $table) {
            $table->id();
            $table->string("fishName");
            $table->string("image");
            $table->integer("price");
            $table->foreignId("seller_id");
            $table->foreignId("owner_id")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fish_posts');
    }
};
