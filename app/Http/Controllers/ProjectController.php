<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Portfolio;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index($id, $title) {
        $portfolio  =   Portfolio::where('id', $id)->where('portfolio_title', $title)->first();
        $gallery    =   Gallery::where('id', $portfolio->gallery_id)->first();

        return view('front.project.show-project', [
            'portfolio' =>  $portfolio,
            'gallery'   =>  $gallery
        ]);
    }
}
