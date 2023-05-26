@extends('layouts.app')

@section('main')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-8 mt-4">
			<div class="card p-4">
			<p>Name: <b>{{ $blogposts->name }}</b></p>
			<p>Description: <b>{{ $blogposts->description }}</b></p>
			<img src="/postImages/{{$blogposts->image}}" class="rounded" width="100%">
			</div>
		</div>
	</div>
</div>

@endsection