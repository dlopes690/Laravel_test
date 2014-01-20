@extends('layouts.master')

@section('content')

<h1>Edit Post</h1>

	<div class="span4 well">

		{{ Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) }}
		<ul>
			<li>
				{{ Form::label('author', 'Author: ') }}
				{{ Form::text('author') }}
			</li>

			<li>
				{{ Form::label('title', 'Title: ') }}
				{{ Form::text('title') }}
			</li>

			<li>
				{{ Form::label('body', 'Body: ') }}
				{{ Form::textarea('body') }}
			</li>
		
			<li>
				{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
				{{ link_to_route('posts.index', 'Cancel', $post->id, array('class' => 'btn btn-warning') )}}
			</li>
		</ul>
		{{ Form::close() }}

		

			<!-- if there are any errors, print them out -->
		@if($errors->any())
			<ul>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</ul>
		@endif

	</div>


@stop