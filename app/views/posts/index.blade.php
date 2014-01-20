@extends('layouts.master')

<!-- section relevant to the @yield call in the master.blade file -->
@section('content')

<h1>All Posts</h1>

<!--<p>{{ HTML::link('create', 'Add A New Post') }}</p>-->
<p>{{ link_to_route('posts.create', 'Add A New Post') }}</p>

@if(isset($posts))
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Author</th>
				<th>Title</th>
				<th>Body</th>
			</tr>
		</thead>

		<tbody>
			@foreach($posts as $p)
				<tr>
					<td>{{ $p->author }} </td>
					<td>{{ $p->title }} </td>
					<td>{{ $p->body }} </td>
					<td>{{ link_to_route('posts.show', 'Show Post', array($p->id), array('class' => 'btn btn-primary')) }} </td>
					<td>{{ link_to_route('posts.edit', 'Edit Post', array($p->id), array('class' => 'btn btn-info')) }} </td>
					<td>
						{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $p->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
						{{ Form::close() }}
						
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@else
	There are no posts

@endif

@stop