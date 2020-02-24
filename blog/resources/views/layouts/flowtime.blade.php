<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="en-US" class="ie ie6 lt-ie9">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US" class="ie ie7 lt-ie9">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US" class="ie ie8 lt-ie9">
<![endif]-->
<!--[if gte IE 9]>
<html lang="en-US" class="ie ie9">
<![endif]-->
<!--[if !(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0 minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="marcolago">

	<meta property="og:title" content="Flowtime.js A HTML Presentation Framework">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://marcolago.github.io/flowtime.js/">
	<meta property="og:image" content="http://marcolago.github.io/flowtime.js/assets/img/share-image.jpg">
	<meta property="og:site_name" content="Flowtime.js') }} ">
	<meta property="fb:admins" content="1293500397">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="https://marcolago.github.io/flowtime.js/">
	<meta name="twitter:title" content="Flowtime.js - A HTML Presentation Framework">
	<meta name="twitter:description" content="Flowtime.js is an open source framework for easily build HTML presentations or websites. It’s built with web standards in mind and on top of a solid full page grid layout powered by CSS3 hardware accelerated transition and comes with a complete set of Javascript API for deep customization.">
	<meta name="twitter:image" content="http://marcolago.github.io/flowtime.js/assets/img/share-image.jpg">
	<meta name="twitter:creator" content="@marcolago">

	<meta name="description" content="Flowtime.js is an open source framework for easily build HTML presentations or websites. It’s built with web standards in mind and on top of a solid full page grid layout powered by CSS3 hardware accelerated transition and comes with a complete set of Javascript API for deep customization.">

	<title>Flowtime.js</title>
	<link rel="stylesheet" href=" {{ asset('flowtime/assets/css/reset.css') }} ">
	<link rel="stylesheet" href=" {{ asset('flowtime/css/flowtime.css') }} ">
	<link rel="stylesheet" href=" {{ asset('flowtime/css/themes/default.css') }} ">
	<link rel="stylesheet" href=" {{ asset('flowtime/assets/css/prism.css') }} ">


	<link rel="apple-touch-icon-precomposed" 						href=" {{ asset('flowtime/img/touch-icon-iphone.png') }} "
	<link rel="apple-touch-icon-precomposed" 	sizes="72x72" 		href=" {{ asset('flowtime/img/touch-icon-ipad.png') }} "
	<link rel="apple-touch-icon-precomposed" 	sizes="114x114" 	href=" {{ asset('flowtime/img/touch-icon-iphone-retina.png') }} "
	<link rel="apple-touch-icon-precomposed" 	sizes="144x144" 	href=" {{ asset('flowtime/img/touch-icon-ipad-retina.png') }} "

	<link rel="apple-touch-startup-image" href=" {{ asset('flowtime/img/startup-640x920.png') }} " media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)">
	<link rel="apple-touch-startup-image" href=" {{ asset('flowtime/img/startup-640x1096.png') }} " media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)">

</head>
<body class="">

    @yield('content')



	<a href="https://github.com/marcolago/flowtime.js"><img style="position: fixed; top: 0; right: 0; border: 0; z-index: 1000;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png') }} " alt="Fork me on GitHub"></a>

	<script src="{{ asset('flowtime/js/brav1toolbox.js') }} "></script>
	<script src="{{ asset('flowtime/js/flowtime.js') }} "></script>
	<!-- <script src="{{ asset('flowtime/js/flowtime.min.js') }} "></script> -->
	<script src="{{ asset('flowtime/assets/js/prism.js') }} "></script>

	<script type="text/javascript">
		var cacheTitle = document.title.replace("Flowtime.js | ", "");
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-1228618-10']);
		_gaq.push(['_trackPageview']);
		_gaq.push(['_trackEvent', 'Flowtime', 'Landing', document.title]);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

		// Configuration API test
		Flowtime.showProgress(true);
		// Flowtime.fragmentsOnSide(true);
		// Flowtime.fragmentsOnBack(true);
		// Flowtime.useHistory(false);
		// Flowtime.slideInPx(true);
		// Flowtime.sectionsSlideToTop(true);
		// Flowtime.backFromPageToTop(true);
		// Flowtime.gridNavigation(false);
		// Flowtime.useOverviewVariant(true);
		Flowtime.parallaxInPx(true);
		//
		// event management
		// Flowtime.addEventListener("flowtimenavigation", onNavigation, false);
		Flowtime.onNavigation(onNavigation);
		function onNavigation(e)
		{
			_gaq.push(['_trackEvent', 'Flowtime', 'Navigation', cacheTitle + ' > ' + document.title.replace("Flowtime.js | ", "")]);
			// console.log(cacheTitle + ' > ' + document.title.replace("Flowtime.js | ", ""));
			cacheTitle = document.title.replace("Flowtime.js | ", "");
			//console.log('section', e.section, 'sectionIndex', e.sectionIndex);
			//console.log('page', e.page, 'pageIndex', e.pageIndex);
			//console.log('pastSectionIndex', e.pastSectionIndex, 'pastPageIndex', e.pastPageIndex);
			//console.log('prevSection', e.prevSection);
			//console.log('nextSection', e.nextSection);
			//console.log('prevPage', e.prevPage);
			//console.log('nextPage', e.nextPage);
			//console.log('fragment', e.fragment, + 'fragmentIndex', e.fragmentIndex);
			//console.log("isOverview", e.isOverview);
			//console.log('progress:', e.progress, 'total:', e.total);
			//var value = Math.round(e.progress * 100 / e.total);
			//console.log('Completion: ' + value + '%');
		}
		// starts the application with configuration options
		Flowtime.start();
	</script>
</body>
</html>
