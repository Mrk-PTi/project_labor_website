@extends('layouts.app')
@section('content')
    <div class="card" style="width: 18rem;">
    	<img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="...">
	  	<div class="card-body">
	    	<h5 class="card-title">{{$post->title}}</h5>
	    	<p class="card-text">{{$post->body}}</p>
	    	<hr>
	    	<small class="card-subtitle mb-2 text-muted">Written on: {{$post->created_at}} by {{$post->user->name}}</small>
    		<hr>
    		@if(!Auth::guest())
    			@if(Auth::user()->id == $post->user_id)
		    		<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
		    		{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'ml-auto'])!!}
		    			{{Form::hidden('_method', 'DELETE')}}
		    			{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
		    		{!!Form::close()!!}
    			@endif
    		@endif
	  	</div>
	</div>
@endsection