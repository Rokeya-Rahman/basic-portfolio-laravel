@extends('front.master')

@section('title')
    Show Project
@endsection

@section('body')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="text-center my-4 py-5 text-white bg-info">
                    <h1>{{ $portfolio->portfolio_title }}</h1>
                    <h6>{!! $portfolio->portfolio_description !!}</h6>
                    <div class="mt-4">
                        <a href="{{ route('show-portfolio', ['id' => $gallery->id , 'title' => $gallery->gallery_title]) }}" class="btn bg-dark text-white">Back To Portfolio</a>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-8 mx-auto my-5 text-center">
                        <img src="{{ asset('/') }}{{ $portfolio->portfolio_image }}" alt="{{ $portfolio->portfolio_title }}" class="card-img-top border mb-3"/>
                        @if(Auth::user())
                            <a href="{{ route('edit-portfolio', ['id' => $portfolio->id ]) }}" class="btn bg-warning text-dark mt-4">Update</a>

                            <a href="" id="{{ $portfolio->id }}" class="btn bg-danger text-white mt-4 delete-portfolio">Delete</a>
                            <form id="deletePortfolio{{ $portfolio->id }}" action="{{ route('delete-portfolio') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $portfolio->id }}" name="id"/>
                            </form>
                        @endif
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection