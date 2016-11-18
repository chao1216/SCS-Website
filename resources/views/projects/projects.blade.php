{{--/**
 * created by: Blaise & Cassidy
 * contributors: Blaise & Cassidy
 * Date: 11/9/16
 * Time: 11:29 PM
 */--}}
@extends('layouts.layout')
@section('title') <title>SCS | Projects</title>@stop
@section('body')
    <script>
        swapActive('#projects')
    </script>
    <div>
        <h1>This is the projects</h1>
        <text>These are our current projects. Please click the link to each member's name to see their projects.</text>
        <table class="table table-hover">
            <?php $numPicsPerRow = 4 ?>
            @for($i = 0; $i< floor(count($projects)/$numPicsPerRow); $i++)
                <tr>
                    @for($c = 0; $c<$numPicsPerRow; $c++)
                        <th>
                            <figure>
                                <img style="width:300px" src="{{$projects[$numPicsPerRow * $i + $c]->img_url}}" alt="">
                                <figcaption>
                                    <div style="width:300px">
                                        <h5>
                                            {{$projects[$numPicsPerRow * $i + $c]->name}}
                                        </h5>
                                        <p>
                                            {{$projects[$numPicsPerRow * $i + $c]->caption}}
                                        </p>
                                    </div>
                                </figcaption>
                            </figure>
                        </th>
                    @endfor
                </tr>
            @endfor
            @for($i = count($projects) - (count($projects) % $numPicsPerRow); $i< count($projects); $i++)
                <th>
                    <figure>
                        <img style="width:300px" src="{{$projects[$i]->img_url}}" alt="">
                        <figcaption>
                            <div style="width:300px">
                                <h5>
                                    {{$projects[$i]->name}}
                                </h5>
                                <p>
                                    {{$projects[$i]->caption}}
                                </p>
                            </div>
                        </figcaption>
                    </figure>
                </th>
            @endfor
        </table>
    </div>
@stop
