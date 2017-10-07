@extends('layouts.admin')

@section('content')


<h1>All posts</h1>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Photo</th>
			<th>Owner</th>
			<th>Category</th>
			<th>Title</th>
			<th>Body</th>
			<th>Created</th>
			<th>Updated</th>
		</tr>
	</thead>
	<tbody>

	@if($posts)

		@foreach($posts as $post)

		<tr>
			<td>{{$post->id}}</td>
			<td><img height="50" src="{{$post->photo ? $post->photo->file : 'https://i.pinimg.com/736x/af/99/5d/af995d61b255bfd53bbdbfa343451949.jpg'}}" alt=""></td>
			<td>{{$post->user->name}}</td>
			<td>{{$post->category ? $post->category->name : 'Un-categorized'}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->body}}</td>
			<td>{{$post->created_at->diffForHumans()}}</td>
			<td>{{$post->updated_at->diffForHumans()}}</td>
		</tr>
		
		@endforeach

	@endif	
	</tbody>
</table>

@stop