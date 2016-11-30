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
    <link rel="stylesheet" href= {{ asset('css/agency.css') }}>
    <link rel="stylesheet" href= {{asset('css/containerStyle.css')}}>
    <script src={{asset('js/activeLinks.js')}}></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="st
ylesheet" type="text/css">
    @yield('title')
</head>
<body>
<div id="navContainer" class="container-fluid">

        <ul class="nav nav-tabs col-lg-12 col-md-12 hidden-sm hidden-xs center-block">
            <li id="home" class="col-lg-2 col-md-2"><a href= {{route('home')}}>{{config('app.name')}}</a></li>
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

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>



</div>
<div class="container-fluid">

    @yield('body')
</div>
</body>

</html>