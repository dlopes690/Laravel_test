@extends('layouts.master')

@section('content')
<div class="container">
	<div class="span4 well">
		<legend>Add A User</legend>
		{{ Form::open(array('url' => 'test')) }}
		{{ Form::text('fname', '', array('placeholder' => 'First Name')) }}
		{{ Form::text('lname', '', array('placeholder' => 'Last Name')) }}
		{{ Form::submit('Add User')}}
		{{ Form::close() }}

		<form action = ''>

		</form>

			<!-- if there are any errors, print them out -->
		@if($errors->any())
			<ul>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</ul>
		@endif

	</div>
</div>
	

@stop