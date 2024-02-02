<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;



class PageController extends Controller
{
    public function index() {
        //inseriro qua per recuperare i film dal datebase

        $movies = Movie::all();


        return view('index', compact('movies'));
    }
}
