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
  <h2>Random User Data</h2>
  <h4># of users</h4>
  <form method='POST'>
  	<input type='hidden' name='_token' value='{{ csrf_token() }}'>
  	<input type='number' name='num_users' value='{{ old('num_users') }}' min='0' max='99'><br>
  	<input type="checkbox" name='show_email' value=''> Email
    <input type="checkbox" name='show_username' value='{{ old('show_username') }}'> Username<br>
    {{--
    <input type="checkbox" name='show_password' value='{{ old('show_username') }}'> Password<br>
    keep getting error somewhere in helpers.php, didnt get enough time to resolve.
    --}}
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
