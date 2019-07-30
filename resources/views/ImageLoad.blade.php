@extends('layouts.app')

@section('content')

	<div class="container">

		<h1>Load image</h1>

		<form action="{{ route('image.upload') }}" method="post" enctype="myltipart/form-data">
			{{ csrt_field() }}

			<div class="form-group">
				<input type="file" name="image">
			</div>
				
			<button class="btn btn-default" type="submit">Load</button>
		</form>

		@isset ($path)
			<img class="img-fluid" src="{{ asset('/storage/' . $path ) }}" >
	</div>
	
@endsection				