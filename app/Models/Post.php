<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["fishName", "image", "price", "seller_id"];

    public function seller() {
        return $this->belongsTo(User::class, "seller_id");
    }
}
