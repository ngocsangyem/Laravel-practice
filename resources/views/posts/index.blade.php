@extends('layouts.app')

@section('content')
	@if (count($posts) > 0)
		@foreach ($posts as $post)
			<div class="jumbotron">
				<h1 class="display-5"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
				<p class="lead">Written on {{$post->created_at}}</p>
				<hr class="my-4">
				{{-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> --}}
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection
