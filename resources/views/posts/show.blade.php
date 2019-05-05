@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-primary mb-4">Back</a>
	<div class="content-container">
		<h1>{{$post->title}}</h1>
		<div>
			{{$post->body}}
		</div>
		<hr>
		<small>Written on {{$post->created_at}}</small>
	</div>

@endsection
