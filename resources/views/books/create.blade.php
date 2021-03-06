@extends('layouts.master')


@section('title')
    Create books
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/books/create.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
<h1>Add a new book</h1>
@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method='POST' action='/books/create'>
<input type='hidden' name='_token' value='{{ csrf_token() }}'>
<input type='text' name='title'>
<input type='submit' value='Submit'>
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
