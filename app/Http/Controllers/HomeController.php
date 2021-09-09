<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{

    public function index(){
        $allMovies= Movie::all();
        // dump($allMovies);
        return view('home', compact('allMovies'));
    }
}
