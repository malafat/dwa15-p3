@extends('layouts.master')


@section('title')
    Lorem Ipsum
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
@stop


@section('content')
  <h1>Create filler text with this tool</h1>
  <form method='POST'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    # of paragraphs: <input type='number' name='length' value='{{old('length')}}' min='0' max='99'><br>
    <input type='submit' value='Generate tasty filling...'>
  </form>
  <br>

@stop

@section('output')
  {!!$output!!}
@stop



{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop
