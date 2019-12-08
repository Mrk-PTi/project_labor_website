@extends('layouts.app')
@section('content')
    <div class="jumbotron">
      <h1 class="display-4">{{$title}}</h1>
      <p class="lead">Welcome to our Home page!<br>
      Socialgram is tipical social website that can be found everywhere, but it's more since we created it!</p>
      <hr class="my-4">
      <p>Enjoy your time here, chat with your friends and share your experiences with others!</p>
      <a class="btn btn-primary btn-lg" href="/about" role="button">Learn more</a>
    </div>
@endsection