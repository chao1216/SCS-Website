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
                <div class="col-lg-12">
                    <div  class="row">
                        <div class="col col-lg-6">
                            <div class="img-thumbnail">
                                <img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/571e020b27d4bd683be083f8/1461584400006/?format=300w" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-6">
            <div class="member-content">
                <h2>@{{ member.name }}</h2>
                <h3>Title</h3>
                <p>@{{ member.biography }}</p>
                <a href="@{{ member.github_profile_link }}">GitHub</a><br>
                <a href="@{{ member.linkedIn_link }}">LinkedIn</a>
            </div>
        </div>
        </div>
    </div>
    </div>

@stop
