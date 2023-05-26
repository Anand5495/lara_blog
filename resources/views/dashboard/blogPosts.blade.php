@extends('layouts.app')

@section('main')


<div class="main d-flex">

	<div class="sidebar w-25">
		@include('layouts.dash_sidebar')
	</div>

	<div class="bp_list w-100">

		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Image</th>
		      <th scope="col">Author</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    // echo '<pre>';
		    // print_r($blogposts);
		    // echo '</pre>'
		     ?>
		    @foreach($blogposts as $blogpost)
		    <tr>
		      <td> {{$blogpost->name}} </td>
		      <td> <img src="/postImages/{{ $blogpost->image }}" class="rounded-circle" width="50" height="50" /> </td>
		      <td>
		      	<a href="/dashboard/{{ $blogpost->id }}/show" class="btn btn-dark btn-sm">View</a>
		      	<a href="/dashboard/{{ $blogpost->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
		      	<a href="/dashboard/{{ $blogpost->id }}/delete" class="btn btn-dark btn-sm">Delete</a>
		      </td>
		    </tr>
		    @endforeach 
		    
		  </tbody>
		</table>

	</div>

</div>

@endsection