<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishPost;
use App\Models\Feed;
use App\Models\Order;

class MyFishesController extends Controller
{
    public function show() {
        $posts = FishPost::orderBy("fishName")->get()->where('seller_id', 'Like', auth()->user()->id);
            return view("myfishes")->with([
                "posts" => $posts,
            ]);
    }

    public function showFishCollection() {
        $posts = FishPost::orderBy("fishName")->get()->where('owner_id', 'Like', auth()->user()->id);
        $feeds = Feed::get();
        $amount = Order::where('userId', auth()->user()->id)->pluck('amount')->first();

            return view("fishcollection")->with([
                "posts" => $posts,
                "feeds" => $feeds,
                "amount" => $amount
            ]);
    }

    public function update(Request $request) {
        $request->validate([
            "fishName" => 'required|string',
            "price" => 'required|integer'
        ]);

        FishPost::where('id', $request["id"])->update([
            'fishName' => $request["fishName"],
            "price" => $request["price"]
        ]);

        return redirect()->route("market");
    }

    public function delete(Request $request) {
        FishPost::where('id', $request["id"])->delete();

        return redirect()->route("market");
    }
}
