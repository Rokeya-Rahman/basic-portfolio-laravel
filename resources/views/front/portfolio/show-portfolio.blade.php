@extends('front.master')

@section('title')
    Show Portfolio
@endsection

@section('body')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="text-center my-4 py-5 text-white bg-info">
                    <h1>{{ $gallery->gallery_title }}</h1>
                    <h6>{!! $gallery->gallery_description !!}</h6>
                    <div class="mt-4">
                        <a href="{{ route('/') }}" class="btn bg-dark text-white">Back To Gallery</a>
                        @if(Auth::user())
                            <a href="{{ route('create-portfolio', ['id' => $gallery->id]) }}" class="btn bg-danger text-white">Upload Portfolio</a>
                        @endif
                    </div>
                </div>

                @if(Session::has('message'))
                    <h4 class="text-center text-warning mt-2 mb-4">{{ Session::get('message') }}</h4>
                @endif

                <div class="row">

                    @if(count($portfolios) !== 0)

                        @foreach($portfolios as $portfolio)

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <img class="card-img-top border" src="{{asset('/')}}{{ $portfolio->portfolio_image }}" alt="{{ $portfolio->portfolio_title }}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $portfolio->portfolio_title }}</h4>
                                        <p class="card-text">{!! $portfolio->portfolio_description !!}</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="{{ route('show-project', ['id' => $portfolio->id, 'title' => $portfolio->portfolio_title]) }}" class="btn bg-warning text-dark">Project</a>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    @else

                        <div class="col-md-8 mx-auto">
                            <div class="card-body my-5 py-5 bg-light">
                                <h2 class="text-center text-md-center">There is no Portfolio Under this Gallery</h2>
                            </div>
                        </div>

                    @endif

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection