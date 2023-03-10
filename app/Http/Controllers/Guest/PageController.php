<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        
        $movies = Movie::all();
        return view('movie', compact('movies'));
    }
    public function about(){
        
        return view('about');
    }
    public function DarkWeb(){
        
        return view('0000');
    }
}
