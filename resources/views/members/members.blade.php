@extends('layouts.layout')
@section('title') <title>SCS | Team</title> @stop
@section('body')

    <script src="app/app.js"></script>
    <script src="app/members/membersController.js"></script>

    <div ng-app="memberApp">

    <div id="about-members" ng-controller="MembersController">
        <div ng-repeat="member in members">

        <div class="column">
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
                <div class="single-row row">
                    <div ng-show="$index % 2 == 0">

                        <div class="column">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                                <img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/571e020b27d4bd683be083f8/1461584400006/?format=300w"
                                     alt="@{{ member.name }}" class="img-rounded img-responsive center-block">

                            </div>
                        </div>
                        <div class="member-content col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <h2>@{{ member.name }}</h2>
                            <h3>Title</h3>
                            <p>@{{ member.biography }}</p>
                            <a href="@{{ member.githubProfileLink }}">GitHub</a><br>
                            <a href="@{{ member.linkedInLink }}">LinkedIn</a>
                        </div>
                    </div>
                    <div ng-show="$index % 2 != 0">

                        <div class="member-content col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <h2>@{{ member.name }}</h2>
                            <!-- TODO: Add title into database -->
                            <h3>Title</h3>
                            <p>@{{ member.biography }}</p>
                            <a href="@{{ member.githubProfileLink }}">GitHub</a><br>
                            <a href="@{{ member.linkedInLink }}">LinkedIn</a>
                        </div>
                        <div class="column">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                                <img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/571e020b27d4bd683be083f8/1461584400006/?format=300w"
                                     alt="@{{ member.name }}" class="img-rounded img-responsive center-block">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@stop
