@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-primary mb-4">Back</a>
	<div class="content-container">
		<h1>{{$post->title}}</h1>
		<div>
			{!! $post->body !!}
		</div>
		<hr>
		<small>Written on {{$post->created_at}}</small>
		<hr>
		@if (!Auth::guest())
			<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>
			{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger btn-outline'])}}
			{!! Form::close() !!}
		@endif
	</div>

@endsection
