<html>
<head>
	
	<title>App name - @yield('title')</title>
</head>
<body>
	@include ('layouts.partials.navigation')

<div  class="container">
@yield('content')
</div>

</body>
</html>