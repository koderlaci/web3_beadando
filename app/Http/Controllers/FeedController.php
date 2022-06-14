<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feed;
use App\Models\Order;
use Redirect;

class FeedController extends Controller
{
    public function showFeeds() {
        return view("feeds");
    }

    public function show() {
        $feeds = Feed::get();
            return view("feeds")->with("feeds", $feeds);
    }

    public function buyFeed(Request $request)
    {
        $userMoney = auth()->user()->money;

        if($userMoney - $request["price"] >= 0) {
            User::where('id', auth()->user()->id)->update([
                "money" => $userMoney - $request["price"],
            ]);

            $amount = Order::where('userId', auth()->user()->id)->pluck('amount')->first();

            $order = Order::where('userId', auth()->user()->id)->update([
                "amount" => $amount + 1
            ]);

            return redirect()->route("fishCollection");
        }
        else {
            return Redirect::back()->withErrors(['msg' => 'You do not have enough money to buy this feed.']);
        }
    }
}
