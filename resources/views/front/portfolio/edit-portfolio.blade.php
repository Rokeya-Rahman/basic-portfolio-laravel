@extends('front.master')

@section('title')
    Create Portfolio
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-10 mx-auto my-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <div class="text-center my-4 py-1 text-white bg-info">
                                <h1 class="card-title">Portfolio Gallery</h1>
                                <h6 class="card-text">Create Portfolio Gallery and Start Upload Your Portfolio Image</h6>
                            </div>
                        </div>

                        <div class="card-body">

                            {{ Form::open(['route'=>'update-portfolio', 'method'=>'POST', 'enctype'=>'multipart/form-data' ]) }}

                            <div class="form-group row">
                                <label for="" class="col-form-label font-weight-bold col-md-3">Portfolio Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="portfolio_title" class="form-control" value="{{ $portfolio->portfolio_title }}"/>
                                    <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}"/>
                                    <input type="hidden" name="gallery_id" class="form-control" value="{{$gallery->id}}"/>
                                    <input type="hidden" name="id" class="form-control" value="{{$portfolio->id}}"/>
                                    <span class="text-danger">{{ $errors->has('portfolio_title') ? $errors->first('portfolio_title') : '' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label font-weight-bold col-md-3">Portfolio Description</label>
                                <div class="col-md-9">
                                    <textarea name="portfolio_description" id="editor" class="form-control" rows="8">{{ $portfolio->portfolio_description }}</textarea>
                                    <span class="text-danger">{{ $errors->has('portfolio_description') ? $errors->first('portfolio_description') : '' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label font-weight-bold col-md-3">Portfolio Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="portfolio_image" accept="image/*" class="card-img-top"/>
                                    <br />
                                    <img src="{{ asset('/') }}{{ $portfolio->portfolio_image }}" alt="{{ $portfolio->portfolio_title }}" height="100" width="130">
                                    <span class="text-danger">{{ $errors->has('portfolio_image') ? $errors->first('portfolio_image') : '' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" class="form-control btn btn-block bg-info text-white" value="Update Portfolio Image"/>
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