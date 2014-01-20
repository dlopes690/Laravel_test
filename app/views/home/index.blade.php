@extends('layouts.master')

<!-- section relevant to the @yield call in the master.blade file -->
@section('content')

<h1>All Users</h1>

<p>{{ HTML::link('create', 'Add A New User') }}</p>

@if(isset($users))
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach($users as $u)
				<tr>
					<td>{{ $u->fname }} </td>
					<td>{{ $u->lname }} </td>
				</tr>
			@endforeach
		</tbody>
	</table>

@else
	There are no users

@endif

@stop