<?php

namespace App\Http\Controllers;

use App\Models\FishPost;
use App\Models\User;
use Illuminate\Http\Request;
use Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            "fishName" => 'required',
            "image" => 'required',
            "price" => 'required|integer',
        ]);

        FishPost::create([
            'fishName' => $request["fishName"],
            'image' => $request["image"],
            "price" => $request["price"],
            "seller_id" => auth()->user()->id
        ]);

        return redirect()->route("market");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FishPost  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request['searchValue']) {
            $posts = FishPost::orderBy("fishName")->get()->where('fishName', 'like', $request['searchValue'])->where('owner_id', "like", 0);
            return view("market")->with([
                "posts" => $posts,
            ]);
        }
        else {
            $posts = FishPost::orderBy("fishName")->where('owner_id', "like", 0)->get();
            return view("market")->with([
                "posts" => $posts,
            ]);
        }
    }

    public function showFish()
    {
        return view('sellfish');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FishPost  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(FishPost $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FishPost  $post
     * @return \Illuminate\Http\Response
     */
    public function buyFish(Request $request)
    {
        if(auth()->user()->money - $request["price"] >= 0) {
            $sellerMoney = User::where('id', "like", $request["sellerId"])->value("money");

            User::where('id', auth()->user()->id)->update([
                "money" => auth()->user()->money - $request["price"],
            ]);
            User::where('id', $request["sellerId"])->update([
                "money" => $sellerMoney + $request["price"],
            ]);
            FishPost::where('id', $request["postId"])->update([
                "owner_id" => auth()->user()->id,
            ]);

            return redirect()->route("fishCollection");
        }
        else {
            return Redirect::back()->withErrors(['msg' => 'You do not have enough money to buy this fish.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FishPost  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(FishPost $post)
    {
        //
    }
}
