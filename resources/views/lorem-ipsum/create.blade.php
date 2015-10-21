@extends('layouts.master')


@section('title')
    Lorem-Ipsum Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    <form method='POST' action='/lorem-ipsum'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <p>
      <h2>Please input the number(2) of paragraphs you wish to generate.</h2>
    </p>
    <input type='int' name='usernum'>
    <input type='submit' value='Submit'>

    </form>

    <p>{!! $finalgen !!}</p>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/lorem/lorem.js"></script>
@stop
