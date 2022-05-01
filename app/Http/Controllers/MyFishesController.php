<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MyFishesController extends Controller
{
    public function show() {
        $posts = Post::orderBy("fishName")->get()->where('seller_id', 'Like', auth()->user()->id);
            return view("myfishes")->with([
                "posts" => $posts,
            ]);
    }

    public function showFishCollection() {
        $posts = Post::orderBy("fishName")->get()->where('owner_id', 'Like', auth()->user()->id);
            return view("fishcollection")->with([
                "posts" => $posts,
            ]);
    }

    public function update(Request $request) {
        $request->validate([
            "fishName" => 'required|string',
            "price" => 'required|integer'
        ]);

        Post::where('id', $request["id"])->update([
            'fishName' => $request["fishName"],
            "price" => $request["price"]
        ]);

        return redirect()->route("market");
    }
}
