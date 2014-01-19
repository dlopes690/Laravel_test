<!-- Master layout which will contain the main skeleton of the site
	this is where we can later include both header and footer files
 -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	{{ HTML::style('css/style.css') }}
</head>
<body>
	@include('layouts/nav')
	@yield('content')

</body>
</html>