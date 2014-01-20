<!-- Master layout which will contain the main skeleton of the site
	this is where we can later include both header and footer files
 -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		table form{
			margin-bottom: 0;
		}

		form ul{
			margin-left: 0;
			list-style: none;
		}

		.error{
			color:red;
			font-style: italic;
		}

		body{
			padding-top: 20px;
		}

	</style>

	<title></title>
	{{ HTML::style('css/style.css') }}
</head>
<body>
	@include('layouts/nav')

	<div class="container">
		@if(Session::has('message'))
			<div class="flash alert">
				<p>{{ Session::get('message') }} </p>
			</div>
		@endif

		@yield('content')
	</div>

	

</body>
</html>