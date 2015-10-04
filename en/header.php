<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="<?php //Beschreibung der Seite für Google Snippet
											echo $description
										?>" />

		<title>Mathedia - <?php
							// Ausgabe der Variable $title (Definiert in der jeweiligen, aufgerufenen Seite) um den Seitentitel in dem Browserfenster anzuzeigen
							echo $title; 
						?></title>
						
		<!-- Bootstrap -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<!-- Piwik -->
		<script type="text/javascript">
		  var _paq = _paq || [];
		  _paq.push(['trackPageView']);
		  _paq.push(['enableLinkTracking']);
		  (function() {
			var u="//mathedia.com/piwik/";
			_paq.push(['setTrackerUrl', u+'piwik.php']);
			_paq.push(['setSiteId', 1]);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
		  })();
		</script>
		<noscript><p><img src="//mathedia.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
	<!-- End Piwik Code -->
	<!-- Piwik Image Tracker-->
		<noscript><img src="http://mathedia.com/piwik/piwik.php?idsite=1&rec=1" style="border:0" alt="" /></noscript>
	<!-- End Piwik -->
	<!-- Google Analytics Opt-out -->
	<script>
		// Set to the same value as the web property used on the site
		var gaProperty = 'UA-45593496-2';

		// Disable tracking if the opt-out cookie exists.
		var disableStr = 'ga-disable-' + gaProperty;
		if (document.cookie.indexOf(disableStr + '=true') > -1) {
		  window[disableStr] = true;
		}

		// Opt-out function
		function gaOptout() {
		  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
		  window[disableStr] = true;
		}
	</script>
	<!-- End Google Analytics Opt-out -->
	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-45593496-2', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="/en/index.php">Mathedia</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Differential equations<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/en/differential_equations/separation_of_variables_1.php">Separation of variables 1</a></li>
					<li><a href="/en/differential_equations/variation_of_parameters_1.php">Variation of parameters 1</a></li>
				</ul>
				</li>
			</ul>
		</div>
	  </div>
	</nav>