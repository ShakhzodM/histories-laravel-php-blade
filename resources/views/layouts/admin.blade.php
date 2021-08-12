<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="ccnjkcnwefcfjh333">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css?v=3') }}">
	<title>@yield('title')</title>
</head>
<body>
	<div class="wrapper">
		<header>
			@yield('header')
		</header>


		<main>
			@yield('content')
		</main>


		<footer>
			
		</footer>
	</div>
</body>
</html>