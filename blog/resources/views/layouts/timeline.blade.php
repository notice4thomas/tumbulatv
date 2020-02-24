<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="{{asset('timeline/example/css/example.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{asset('timeline/css/jquery-timeline.css') }} ">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Timeline: Tumbula Tribe</title>
</head>
<body>
	<header>
		<div class="wrapper">
			<div class="heading">
				<h1>brand Africa</h1>
			</div>
		</div>
	</header>
	<main>
		<div class="wrapper-timeline">

			<div id="jquery-timeline"></div>

		</div>
	</main>
	<footer>
		<div class="jt-wrapper">
			<div class="jt-copyright">
				<div></div>
			</div>
		</div>
	</footer>


	<script language="javascript" type="text/javascript" src="{{asset('timeline/example/jquery/jquery.min.js') }} "></script>
	<script language="javascript" type="text/javascript" src="{{asset('timeline/js/jquery-timeline.js') }} "></script>
    
    @yield('content')
    
    
</body>
</html>