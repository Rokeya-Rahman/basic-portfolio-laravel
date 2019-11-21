<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class BasicPortfolioController extends Controller
{
    public function index() {
        $galleries  =   Gallery::all();

        return view('front.home.home', ['galleries' =>  $galleries]);
    }
}
