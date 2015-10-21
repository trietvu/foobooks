@extends('layouts.master')


@section('title')
    Random User Generator
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
{{--
@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif --}}

    <form method='POST' action='/usergenerator'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <p>
      <h2>Please input the number of paragraphs you wish to generate.</h2>
    </p>
    <label for="users">How many users? </label>
    <input type='int' name='users' size='1'><br><br>
    Please select the data you would like to generate:<br><br>
    <input  name="title" type="checkbox"> <label for="title">Title (Mr., Ms., Dr., Etc.)</label><br>
    <input  name="birthdate" type="checkbox"> <label for="birthdate">Birthdate</label><br>
    <input name="address" type="checkbox"> <label for="address">Address</label><br>
		<input name="phone" type="checkbox"> <label for="phone">Phone number</label><br>
		<input name="profile" type="checkbox"> <label for="profile">Profile</label><br><br>

    <input type='submit' value='Submit'>

    </form>

    @for($i = 0; $i < $users; $i++)
      <p>{!! $finalprofile !!}</p>
    @endfor
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/lorem/lorem.js"></script>
@stop
