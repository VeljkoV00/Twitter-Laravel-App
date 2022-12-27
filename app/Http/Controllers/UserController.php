<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function show(User $user){

        $tweets = Tweet::where('user_id', $user->id)->get();
        return view('profiles.profile', compact('user', 'tweets'));
    }

    public function edit(User $user){

        return view('profiles.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user){

       $image = $request->file('image')->store('public/images');

       $user->update([


        'name' => $request->name,
        'image' => $image,
        'description' => $request->description,
        'username' => $request->username

       ]);

       return redirect()->back()->with('message', 'User updated');
        

    }
}
