<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Portfolio;
use Image;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index($id, $title) {
        $gallery    =   Gallery::where('id', $id)->where('gallery_title', $title)->first();
        $portfolios =   Portfolio::where('gallery_id', $id)->get();
//        return $portfolios;

        return view('front.portfolio.show-portfolio', [
            'gallery'       =>  $gallery,
            'portfolios'    =>  $portfolios
        ]);
    }

    public function createPortfolio($id) {
        $gallery = Gallery::where('id', $id)->select('id')->first();
        return view('front.portfolio.create-portfolio', ['gallery' => $gallery]);
    }

    protected function createPortfolioValidate($request) {
        $this->validate($request, [
            'portfolio_title'           =>  'required|regex:/(^([a-zA-Z _]+)(\d+)?$)/u|max:30|min:3',
            'portfolio_description'     =>  'required',
            'portfolio_image'           =>  'required'
        ]);
    }

    protected function portfolioImage($request) {
        $portfolioImage = $request->file('portfolio_image');
        $fileType = $portfolioImage->getClientOriginalExtension();
        $portfolioName = $request->portfolio_title.'.'.$fileType;
        $directory = 'gallery-images/';
        $imageUrl = $directory.$portfolioName;

        Image::make($portfolioImage)->resize(800, 450)->save($imageUrl);

        return $imageUrl;
    }

    protected function savePortfolioInfo(Request $request, $imageUrl) {
        $portfolio = new Portfolio();
        $portfolio->user_id                 =   $request->user_id;
        $portfolio->gallery_id              =   $request->gallery_id;
        $portfolio->portfolio_title         =   $request->portfolio_title;
        $portfolio->portfolio_description   =   $request->portfolio_description;
        $portfolio->portfolio_image         =   $imageUrl;
        $portfolio->save();
    }

    public function newPortfolio(Request $request) {
        $gallery        = Gallery::where('id',$request->gallery_id)->first();
        $galleryTitle   = $gallery->gallery_title;
        $galleryId      = $request->gallery_id;

        $this->createPortfolioValidate($request);

        $imageUrl = $this->portfolioImage($request);

        $this->savePortfolioInfo($request, $imageUrl);

        return redirect('/portfolio/'.$galleryId.'/'.$galleryTitle)->with('message', 'Your Portfolio Is Saved Successfully');
    }

    public function editPortfolio($id) {
        $portfolio  =   Portfolio::find($id);
        $gallery    =   Gallery::where('id', $portfolio->gallery_id)->first();

        return view('front.portfolio.edit-portfolio',[
            'portfolio' =>  $portfolio,
            'gallery'   =>  $gallery
        ]);
    }

    protected function updatePortfolioValidate($request) {
        $this->validate($request, [
            'portfolio_title'           =>  'required|regex:/(^([a-zA-Z _]+)(\d+)?$)/u|max:30|min:3',
            'portfolio_description'     =>  'required'
        ]);
    }

    protected function updatePortfolioInfo($portfolio, $request, $imageUrl=null) {
        $portfolio->user_id                 =   $request->user_id;
        $portfolio->gallery_id              =   $request->gallery_id;
        $portfolio->portfolio_title         =   $request->portfolio_title;
        $portfolio->portfolio_description   =   $request->portfolio_description;
        if ($imageUrl) {
            $portfolio->portfolio_image     =   $imageUrl;
        }
        $portfolio->save();
    }

    public function updatePortfolio(Request $request) {
        $portfolioImage =   $request->file('portfolio_image');
        $portfolio      =   Portfolio::find($request->id);
        $this->updatePortfolioValidate($request);

        if ($portfolioImage) {
            unlink($portfolio->portfolio_image);
            $imageUrl = $this->portfolioImage($request);
            $this->updatePortfolioInfo($portfolio, $request, $imageUrl);
        } else {
            $this->updatePortfolioInfo($portfolio, $request);
        }

        $gallery = Gallery::where('id', $portfolio->gallery_id)->first();
        $galleryTitle   =   $gallery->gallery_title;
        $galleryId      =   $request->gallery_id;

        return redirect('/portfolio/'.$galleryId.'/'.$galleryTitle)->with('message', 'Your Portfolio Is Update Successfully');
    }

    public function deletePortfolio(Request $request) {
        $portfolio      =   Portfolio::find($request->id);
        if (file_exists($portfolio->portfolio_image)) {
            unlink($portfolio->portfolio_image);
        }
        $portfolio->delete();

        $gallery = Gallery::where('id', $portfolio->gallery_id)->first();
        $galleryTitle   =   $gallery->gallery_title;
        $galleryId      =   $gallery->id;

        return redirect('/portfolio/'.$galleryId.'/'.$galleryTitle)->with('message', 'Your Portfolio Is Deleted Successfully');
    }
}
