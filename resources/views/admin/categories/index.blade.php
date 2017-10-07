@extends('layouts.admin')



@section('content')

<h1>Categories</h1>

<div class="col-sm-6">
	


{!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store'])!!}
<div class="form-group">
	{!! Form::label('name','Name')!!}
	{!! Form::text('name',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::submit('Create Category', ['class'=>'btn btn-primary col-sm-6']) !!}

</div>
{!! Form::close() !!}




</div>
<div class="col-sm-6">
	
	@if($categories)

	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Created at</th>
			</tr>
		</thead>
		<tbody>
		@foreach($categories as $category)
			<tr>
				<th> {{$category->id}}</th>
				<th><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></th>
				<th>{{$category->created_at ? $category->created_at->diffForHumans() : 'No date'}}</th>
			</tr>
		@endforeach	
		</tbody>
	</table>







	@endif
</div>




@stop