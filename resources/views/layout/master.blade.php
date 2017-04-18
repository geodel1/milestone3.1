<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<div class="jumbotron text center">
			@yield('content')
		</div>

		<div>
			<p>@yield('sidebar')</p>
		</div>
	</div>
</body>
</html>