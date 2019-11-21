<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Portfolio;
use Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        return view('front.gallery.create-gallery');
    }

    protected function createGalleryValidate($request) {
        $this->validate($request, [
            'gallery_title'         =>  'required|regex:/(^([a-zA-Z _]+)(\d+)?$)/u|max:30|min:3',
            'gallery_description'   =>  'required',
            'gallery_image'         =>  'required'
        ]);
    }

    protected function galleryImageSave($request) {
        $galleryImage = $request->file('gallery_image');
        $fileType = $galleryImage->getClientOriginalExtension();
        $galleryName = $request->gallery_title.'.'.$fileType;
        $directory = 'gallery-images/';
        $imageUrl = $directory.$galleryName;

        Image::make($galleryImage)->resize(800, 450)->save($imageUrl);

        return $imageUrl;
    }

    protected function saveGalleryInfo($request, $imageUrl) {
        $gallery = new Gallery();
        $gallery->user_id               =   $request->user_id;
        $gallery->gallery_title         =   $request->gallery_title;
        $gallery->gallery_description   =   $request->gallery_description;
        $gallery->gallery_image         =   $imageUrl;
        $gallery->save();
    }

    public function newGallery(Request $request) {
        $this->createGalleryValidate($request);

        $imageUrl = $this->galleryImageSave($request);

        $this->saveGalleryInfo($request, $imageUrl);

        return redirect('/')->with('message', 'Your Gallery Is Saved Successfully');
    }

    public function editGallery($id) {
        return view('front.gallery.edit-gallery', [
            'gallery'   =>  Gallery::find($id)
        ]);
    }

    protected function updateGalleryInfo($request, $gallery, $imageUrl=null) {
        $gallery->user_id               =   $request->user_id;
        $gallery->gallery_title         =   $request->gallery_title;
        $gallery->gallery_description   =   $request->gallery_description;
        if ($imageUrl) {
            $gallery->gallery_image     =   $imageUrl;
        }
        $gallery->save();
    }

    public function updateGallery(Request $request) {
        $galleryImage = $request->file('gallery_image');
        $gallery = Gallery::find($request->id);

        if ($galleryImage) {
            unlink($gallery->gallery_image);
            $imageUrl = $this->galleryImageSave($request);
            $this->updateGalleryInfo($request, $gallery, $imageUrl);

        } else {
            $this->updateGalleryInfo($request, $gallery);
        }

        return redirect('/')->with('message', 'Your Gallery Is Update Successfully');
    }

    public function deleteGallery(Request $request) {
        $portfolio = Portfolio::where('gallery_id', $request->id)->first();

        if ($portfolio) {
            return redirect('/')->with('message', 'Sorry this Gallery can not Delete because there are Some Portfolio Under this Gallery');
        } else {
            $gallery = Gallery::find($request->id);
            if (file_exists($gallery->gallery_image)) {
                unlink($gallery->gallery_image);
            }
            $gallery->delete();

            return redirect('/')->with('message', 'Your Gallery Is Deleted Successfully');
        }
    }
}
