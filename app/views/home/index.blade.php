@extends('layouts.master')

<!-- section relevant to the @yield call in the master.blade file -->
@section('content')
<div class="welcome">
	<p>Hellooooo there</p>

	{{ Form::open(array('url' => 'test')) }}
	{{ Form::text('fname', '', array('placeholder' => 'First Name')) }}
	{{ Form::text('lname', '', array('placeholder' => 'Last Name')) }}
	{{ Form::submit('Add Name')}}
	{{ Form::close() }}

	<form action = ''>

	</form>
</div>

@stop