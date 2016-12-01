@extends('layouts.layout')
@section('title') <title>SCS | Team</title> @stop
@section('body')
    <link rel="stylesheet" href= {{asset('css/membersStyle.css')}}>
    <script src="app/app.js"></script>
    <script src="app/members/membersController.js"></script>

    <header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>SCC</h1>
                        <hr class="small">
                        <h2 class="subheading">Club Members</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div ng-app="memberApp" class="container">

        <div id="about-members" class="row" ng-controller="MembersController">
            <div ng-repeat="member in members">
                <div class="row">
                    <div ng-show="$index % 2 == 0">

                        <div class="column col-lg-3 col-md-3 hidden-sm hidden-xs">

                            <img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/571e020b27d4bd683be083f8/1461584400006/?format=300w"
                                 alt="@{{ member.name }}" class="img-rounded img-responsive">

                        </div>
                        <div class="member-content col-lg-7 col-md-7 hidden-sm hidden-xs">
                            <h2>@{{ member.name }}</h2>
                            <h3>Title</h3>
                            <p>@{{ member.biography }}</p>
                            <a href="@{{ member.github_profile_link }}">GitHub</a><br>
                            <a href="@{{ member.linkedIn_link }}">LinkedIn</a>
                        </div>
                    </div>
                    <div ng-show="$index % 2 != 0">

                        <div class="member-content col-lg-7 col-md-7 hidden-sm hidden-xs">
                            <h2>@{{ member.name }}</h2>
                            <!-- TODO: Add title into database -->
                            <h3>Title</h3>
                            <p>@{{ member.biography }}</p>
                            <a href="@{{ member.github_profile_link }}">GitHub</a><br>
                            <a href="@{{ member.linkedIn_link }}">LinkedIn</a>
                        </div>

                        <div class="column">
                            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">

                                <img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/571e020b27d4bd683be083f8/1461584400006/?format=300w"
                                     alt="@{{ member.name }}" class="img-rounded img-responsive">

                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="column col-xs-12 col-md-12 hidden-lg hidden-md">

                            <img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/571e020b27d4bd683be083f8/1461584400006/?format=300w"
                                 alt="@{{ member.name }}" class="img-rounded img-responsive">

                        </div>

                        <div class="member-content col-xs-12 col-sm-12 hidden-lg hidden-md">
                            <h2>@{{ member.name }}</h2>
                            <h3>Title</h3>
                            <p>Anthony Casalena is the Founder and CEO of Squarespace, which he started from his dorm
                                room in 2003. During the company’s early years, Anthony acted as the sole engineer,
                                designer, and support representative for the entire Squarespace platform, allowing for
                                it to be a stable business from the outset. In addition to his main responsibilities in
                                running the company and setting overall product strategy, he remains actively involved
                                in the engineering, design, and product teams within the organization. Anthony holds a
                                Bachelor of Science in Computer Science from the University of Maryland.</p>
                            <a href="@{{ member.github_profile_link }}">GitHub</a><br>
                            <a href="@{{ member.linkedIn_link }}">LinkedIn</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

@stop