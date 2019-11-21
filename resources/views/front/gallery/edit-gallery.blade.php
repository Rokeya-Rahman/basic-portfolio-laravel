@extends('front.master')

@section('title')
    Update Gallery
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-10 mx-auto my-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <div class="text-center my-4 py-1 text-white bg-info">
                                <h1>Portfolio Gallery</h1>
                                <h6>Update Your Portfolio Gallery and Start Upload Your Portfolio Image</h6>
                            </div>
                        </div>
                        <div class="card-body">

                            {{ Form::open(['route'=>('update-gallery'), 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Gallery Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="gallery_title" class="form-control" value="{{ $gallery->gallery_title }}"/>
                                    <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}"/>
                                    <input type="hidden" name="id" class="form-control" value="{{ $gallery->id }}"/>
                                    <span class="text-danger">{{ $errors->has('gallery_title') ? $errors->first('gallery_title') : '' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Gallery Description</label>
                                <div class="col-md-9">
                                    <textarea id="editor" name="gallery_description" class="form-control" rows="8">{{ $gallery->gallery_description }}</textarea>
                                    <span class="text-danger">{{ $errors->has('gallery_description') ? $errors->first('gallery_description') : '' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Gallery Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="gallery_image" accept="image/*"/>
                                    <br />
                                    <img src="{{ asset( $gallery->gallery_image ) }}" alt="" height="100" width="130"/>
                                    <span class="text-danger">{{ $errors->has('gallery_image') ? $errors->first('gallery_image') : '' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9 font-weight-bold text-center">
                                    <input type="submit" class="form-control btn btn-block bg-info text-white" value="Update Gallery Image"/>
                                </div>
                            </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection