@extends('layouts.master')

@section('title')
    A Developer's Pal
@stop

@section('content')
  <h2>Developers' Friendly Tools</h2><br><br>
  <h4>Tools:</h4>
  <a href='/filler'>~ Generate filler text!</a><br>
  <a href='/users'>~ Generate dummy user data!</a><br>

@stop

@section('body')
    <script src="/js/books/show.js"></script>
@stop
