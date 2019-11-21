@extends('front.master')

@section('title')
    Login
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 mx-auto my-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h2 class="text-center text-white">User Login</h2>
                            <h6 class="text-center text-white">Please Login To Change Portfolio Gallery</h6>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['route'=>('login'), 'method'=>'POST', 'class'=> 'form-horizontal']) }}

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Email Adderss</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 font-weight-bold">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9 col-form-label font-weight-bold">
                                    <input type="checkbox" name="remember" class="mr-2"/> Remember Me
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9 font-weight-bold text-center">
                                    <input type="submit" class="form-control btn btn-block bg-success text-white" value="Login"/>
                                    <p class="my-3 text-center">----------------------------------- OR -----------------------------------</p>
                                    <a href="{{ route('register') }}" class="form-control btn btn-block bg-warning text-dark">Sing Up</a>
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                                {{--{{ Form::label('email', 'Email Adderss', ['class' => 'col-md-3']) }}--}}
                                {{--<div class="col-md-9">--}}
                                    {{--{{ Form::email('email', '', ['class' => 'form-control']) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--{{ Form::label('password', 'Password', ['class' => 'col-md-3']) }}--}}
                                {{--<div class="col-md-9">--}}
                                    {{--{{ Form::password('password', ['class' => 'form-control']) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<div class="col-md-3"></div>--}}
                                {{--<div class="col-md-9">--}}
                                    {{--{{ Form::checkbox('remember', '', false , ['id' => 'remember']) }}--}}
                                    {{--{{ Form::label('remember', 'Remember me', ['for' => 'remember']) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection