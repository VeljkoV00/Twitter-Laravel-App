<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTweetRequest;
use App\Models\Tweet;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function store(StoreTweetRequest $request){


    Tweet::create([
        'body' => $request->input('body'),
        'user_id' => Auth::user()->id,
    ]);
        
        return redirect()->route('home');
  
    }

    public function edit(User $user, Tweet $tweet){


        return view('tweet.edit', compact('tweet'));
    }

    public function update(User $user, Tweet $tweet, StoreTweetRequest $request){

        $tweet->update([
            'body' => $request->input('body')
        ]);

        return redirect()->route('show_profile', $user);


    }

    public function delete(User $user, Tweet $tweet){

        $tweet->delete();
        return redirect()->route('show_profile', $user);
    }
}
