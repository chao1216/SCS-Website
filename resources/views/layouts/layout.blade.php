{{--/**
 * created by: Blaise & Cassidy
 * contributors: Blaise & Cassidy
 * Date: 11/9/16
 * Time: 11:29 PM
 */--}}

        <!DOCTYPE html>
<html lang="en">
<head>
    @include('global_config')
    {{--<link rel="stylesheet" href= {{ asset('css/agency.css') }}>--}}
    <link rel="stylesheet" href= {{asset('css/NavContainerStyle.css')}}>
    <script src={{asset('js/activeLinks.js')}}></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="st
ylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    @yield('title')
</head>
<body>

<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid" id="navContainer">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a id="home" class="navbar-brand" href= {{route('home')}}> {{config('app.name')}}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="navV" class="nav navbar-nav navbar-right">
                <li id="members" class="col-lg-2 col-md-2"><a href= {{ route('members') }}>Members</a></li>
                <li id="projects" class="col-lg-2 col-md-2"><a href= {{route('projects_show')}}>Projects</a></li>
                <li id="about" class="col-lg-2 col-md-2"><a href= {{route('about')}}>About Us</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="col-lg-2 col-md-2"><a href="{{ url('/login') }}">Login</a></li>
                    <li class="col-lg-2 col-md-2"><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <a href=" {{ route('profile')  }}">Profile</a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

    </div>
</nav>
<div class="container-fluid">

    @yield('body')
</div>
</body>

</html>