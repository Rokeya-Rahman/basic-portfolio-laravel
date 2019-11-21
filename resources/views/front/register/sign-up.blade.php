@extends('front.master')

@section('title')
    Sing Up
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 mx-auto my-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h2 class="text-center text-white">User Sign Up</h2>
                            <h6 class="text-center text-white">Please Sign Up To Create Portfolio Gallery</h6>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['method'=>'POST', 'class'=> 'form-horizontal']) }}

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Email Adderss</label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password_confirmation" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9 font-weight-bold text-center">
                                    <input type="submit" class="form-control btn btn-block bg-warning text-dark" value="Sing Up"/>
                                    <p class="my-3 text-center">----------------------------------- OR -----------------------------------</p>
                                    <a href="{{ route('login') }}" class="form-control btn btn-block bg-success text-white">Login</a>
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