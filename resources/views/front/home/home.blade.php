@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="text-center my-4 py-5 text-white bg-info">
                    <h1>My Portfolio Gallery</h1>
                    <h6>Please Click the Portfolio Cover Image to See All Projects</h6>
                </div>

                @if(Session::has('message'))
                    <h4 class="text-center text-warning mt-2 mb-4">{{ Session::get('message') }}</h4>
                @endif

                <div class="row">

                    @foreach($galleries as $gallery)

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <img class="card-img-top border" src="{{ $gallery->gallery_image }}" alt="{{ $gallery->gallery_title }}">
                                <div class="card-body my-2">
                                    <h4 class="card-title text-info">{{ $gallery->gallery_title }}</h4>
                                    <h6 class="card-text">{!! $gallery->gallery_description !!}</h6>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route('show-portfolio', ['id' => $gallery->id, 'title' => $gallery->gallery_title]) }}" class="btn bg-warning text-dark">Portfolio</a>
                                    @if(Auth::user())
                                        <a href="{{ route('edit-gallery', ['id' =>$gallery->id]) }}" class="btn bg-dark text-white">Update</a>

                                        <a href="#" id="{{ $gallery->id }}" class="btn bg-danger text-white delete-gallery">Delete</a>
                                        <form id="deleteGallery{{ $gallery->id }}" action="{{ route('delete-gallery') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $gallery->id }}" name="id"/>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection