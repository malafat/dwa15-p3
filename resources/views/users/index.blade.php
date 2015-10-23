@extends('layouts.master')


@section('title')
    User Data Generation
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
@stop


@section('content')
  <h1>Create randomized user data with this tool</h1>
  <form method='POST'>
  	<input type='hidden' name='_token' value='{{ csrf_token() }}'>
  	<input type='number' name='num_users' value='{{ old('num_users') }}' min='0' max='99'><br>
  	<input type="checkbox" name='show_email' value=''> Email<br>
    <input type="checkbox" name='show_username' value='{{ old('show_username') }}'> Username<br>
  	<input type='submit' value='Generate'>
  </form>
@stop



{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop
