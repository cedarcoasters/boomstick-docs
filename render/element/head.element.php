	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=isset($pageTitle) ? $pageTitle . ' - ' : '';?>BoomStick Documentation</title>
	<meta name="description" content="<?=isset($pageDescription) ? $pageDescription : 'BoomStick - A lean PHP MVC framework built for AI-assisted development. For seasoned engineers who develop FAST.';?>">
	
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://primitivescrewheads.dev<?=isset($pagePath) ? $pagePath : '/';?>">
	<meta property="og:title" content="<?=isset($pageTitle) ? $pageTitle . ' - ' : '';?>BoomStick Documentation">
	<meta property="og:description" content="<?=isset($pageDescription) ? $pageDescription : 'BoomStick - A lean PHP MVC framework built for AI-assisted development. For seasoned engineers who develop FAST.';?>">
	<meta property="og:image" content="https://primitivescrewheads.dev/images/ash-shotgun.svg">
	<meta property="og:site_name" content="BoomStick Framework">
	
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?=isset($pageTitle) ? $pageTitle . ' - ' : '';?>BoomStick Documentation">
	<meta name="twitter:description" content="<?=isset($pageDescription) ? $pageDescription : 'BoomStick - A lean PHP MVC framework built for AI-assisted development. For seasoned engineers who develop FAST.';?>">
	<meta name="twitter:image" content="https://primitivescrewheads.dev/images/ash-shotgun.svg">


	<!--
	/**
	 * Vendor CSS
	 */
	-->
	<!--
		The following are installed locally and managed by the nodejs module
	-->
	<link rel="stylesheet" type="text/css" href="/css/vendor/bootstrap.min.css">
	<link href="/css/vendor/google-material-icons.css" rel="stylesheet">
	
	<!-- Syntax Highlighting -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
		  rel="stylesheet"
		  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
		  crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->



	<!--
	/**
	 * Vendor Javascript
	 */
	-->
	<!--
		The following are installed locally and managed by the nodejs module
	-->
	<script src="/js/vendor/jquery.min.js"></script>
	<script src="/js/vendor/bootstrap.min.js"></script>

	<!--
		The following CDN hosted libraries are no longer needed once the nodejs module is installed
	-->
	<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
			integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
			crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
	        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
	        crossorigin="anonymous"></script> -->


	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="/css/default.css?version=<?=\BoomStick\version();?>">
