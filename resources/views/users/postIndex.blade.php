@extends('users.index')



@section('output')
  @foreach($output as $user)
    @foreach($user as $key => $value)
      {{$key}} - {{$value}}
      <br>
    @endforeach
    <br>
  @endforeach
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop
