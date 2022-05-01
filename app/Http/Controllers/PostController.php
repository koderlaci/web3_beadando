<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

        Post::create([
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request['searchValue']) {
            $posts = Post::orderBy("fishName")->get()->where('fishName', 'like', $request['searchValue'])->where('owner_id', "like", 0);
            return view("market")->with([
                "posts" => $posts,
            ]);
        }
        else {
            $posts = Post::orderBy("fishName")->where('owner_id', "like", 0)->get();
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function buyFish(Request $request)
    {
        if(auth()->user()->money - $request["price"] >= 0) {
            User::where('id', auth()->user()->id)->update([
                "money" => auth()->user()->money - $request["price"],
            ]);
            Post::where('id', $request["postId"])->update([
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
