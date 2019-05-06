@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Dashboard</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
					<h4>You are logged in!</h4>
					<hr>
					<a href="/posts/create" class="btn btn-primary btn-outline">Create your post</a>
					<table class="table table-sttiped mt-2">
						@foreach ($posts as $post)
							<tr>
								<th>{{$post->title}}</th>
								<td>
									<a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
								</td>
								<td>
									{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
										{{Form::hidden('_method', 'DELETE')}}
										{{Form::submit('Delete', ['class' => 'btn btn-danger btn-outline'])}}
									{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
