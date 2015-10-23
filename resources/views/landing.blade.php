@extends('layouts.master')


@section('title')
    A Developer's Pal
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
@stop


@section('content')
    <div class="container">
        <div class="content">
            <div class="title">A Developer's Best Friend</div>
        </div>

    </div>

@stop

@section('output')
<a href='/filler'>Generate filler text!</a>
<a href='/users'>Generate dummy user data!</a>
@stop



{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

    <script src="/js/books/show.js"></script>
@stop
