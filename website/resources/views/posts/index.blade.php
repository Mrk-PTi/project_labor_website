@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
    	@foreach($posts as $post)
			<div class="card" style="width: 18rem;">
            <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="...">
                <div class="card-body">
			        <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
			        <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at}} by {{$post->user->name}}</h6>
			    </div>
			</div>
    	@endforeach
        {{$posts->links()}}
    @endif
@endsection