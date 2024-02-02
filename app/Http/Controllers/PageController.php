<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class PageController extends Controller
{
    public function index() {
        //inseriro qua per recuperare i film dal datebase

        $movies = Movie::all();


        return view('index', compact('movies'));
    }
}
