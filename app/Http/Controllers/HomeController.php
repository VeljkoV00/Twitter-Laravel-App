<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $tweets = Tweet::latest()->take(3)->get();
        return view('home.index', compact('tweets'));
    }
}
