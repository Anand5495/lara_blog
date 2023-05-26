@extends('layouts.app')

@section('main')

<div class="main d-flex">

<div class="sidebar w-25">
	@include('layouts.dash_sidebar')
</div>

<div class="right cont_main w-100">

		<div class="container">
			<h1>Edit Post</h1>
		</div>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-8">
					<div class="card mt-3 p-3">
						<h3 class="text-muted"></h3>
					<form method="POST" action="/dashboard/{{$blogposts->id}}/update" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" 
							value="{{ old('name', $blogposts->name ) }}"
							/>
							@if($errors->has('name'))
								<span class="text-danger"> {{ $errors->first('name') }} </span>
							@endif
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control" rows="4">
								{{ old('description', $blogposts->description ) }}
							</textarea>
							@if($errors->has('description'))
								<span class="text-danger"> {{ $errors->first('description') }} </span>
							@endif
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" class="form-control" />
							@if($errors->has('image'))
								<span class="text-danger"> {{ $errors->first('image') }} </span>
							@endif
						</div>
						<button type="submit" class="btn btn-dark">Submit</button>	
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection