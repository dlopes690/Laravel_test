@extends('layouts.master')

@section('content')

<h1>Create Post</h1>

	<div class="span4 well">

		{{ Form::open(array('route' => 'posts.store')) }}
		<ul>
			<li>
				{{ Form::label('author', 'Author: ') }}
				{{ Form::text('author', '', array('placeholder' => 'Author')) }}
			</li>

			<li>
				{{ Form::label('title', 'Title: ') }}
				{{ Form::text('title', '', array('placeholder' => 'Title')) }}
			</li>

			<li>
				{{ Form::label('body', 'Body: ') }}
				{{ Form::textarea('body', '', array('placeholder' => 'Enter content')) }}
			</li>
		
			<li>
				{{ Form::submit('Add Post', array('class' => 'btn-submit')) }}
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