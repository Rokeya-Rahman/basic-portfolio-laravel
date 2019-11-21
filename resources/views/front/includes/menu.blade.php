<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">Basic Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('/') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @if(Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create-gallery') }}">Gallery</a>
                    </li>

                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{ route('logout') }}" onclick="--}}
                            {{--event.preventDefault();--}}
                            {{--document.getElementById('logout-form').submit();--}}
                            {{--">Logout</a>--}}
                        {{--{{ Form::open(['route'=>('logout'), 'method'=>'POST', 'class'=> 'form-horizontal', 'id'=>"logout-form"]) }}--}}

                        {{--{{ Form::close() }}--}}
                    {{--</li>--}}

                    <li class="nav-item dropdown"><a href="" class="nav-link text-white dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link text-dark text-center font-weight-bold" href="{{ route('logout') }}" onclick="
                                    event.preventDefault();
                                    document.getElementById('logout-form').submit();
                                ">Logout</a>
                                {{ Form::open(['route'=>('logout'), 'method'=>'POST', 'class'=> 'form-horizontal', 'id'=>"logout-form"]) }}

                                {{ Form::close() }}
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sing Up</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>