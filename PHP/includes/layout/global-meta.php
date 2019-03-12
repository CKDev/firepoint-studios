<?php
/**
 * Site Header & Global Meta-data
 *
 * @package Firepoint.
 * @version 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>	<html lang="en-us" class="no-js ie ie-lte10 ie-lte9 ie-lte8 ie-lte7 ie-lte6"> <![endif]-->
<!--[if IE 7]>		<html lang="en-us" class="no-js ie ie-lte10 ie-lte9 ie-lte8 ie-lte7 ie7"> <![endif]-->
<!--[if IE 8]>		<html lang="en-us" class="no-js ie ie-lte10 ie-lte9 ie-lte8 ie8"> <![endif]-->
<!--[if IE 9]>		<html lang="en-us" class="no-js ie ie-lte10 ie-lte9 ie9"> <![endif]-->
<!--[if gt IE 9]><!--><html lang="en-us" class="no-js ie-gte10"><!--<![endif]-->
<head>
	<title><?php echo APP_SITE_NAME; ?><?php if( !empty(APP_META_TITLE) ) { echo " " . APP_META_TITLE; } ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="en-us">
	<meta http-equiv="Imagetoolbar" content="no">
	<meta name="MSSmartTagsPreventParsing" content="true">
	<meta name="distribution" content="Global">
	<meta name="rating" content="general">
	<meta name="language" content="en-us">
	<meta name="robots" content="all">
	<meta name="allow-search" content="no">
	<meta name="copyright" content="<?php if( !empty(APP_META_COPYRIGHT) ) { echo APP_META_COPYRIGHT; } else { echo APP_META_TITLE . " " . DATE('Y'); } ?>">
	<meta name="abstract" content="<?php if( !empty(APP_META_DESCRIPTION) ) { echo APP_META_DESCRIPTION; } ?>">
	<meta name="description" content="<?php if( !empty(APP_META_DESCRIPTION) ) { echo APP_META_DESCRIPTION; } ?>">
	<meta name="keywords" content="<?php if( !empty(APP_META_KEYWORDS) ) { echo APP_META_KEYWORDS; } ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link href="favicon.ico" type="image/x-icon" rel="icon">
	<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  	<script src="<?php echo APP_ROOT; ?>/webroot/js/vendors.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo APP_ROOT; ?>/webroot/js/ie10-viewport-bug-workaround.js"></script>
	<![endif]-->
	<script src="<?php echo APP_ROOT; ?>/webroot/js/scripts.js"></script>
	<!-- Typekit -->
	<script>
	(function(d) {
		var config = {
			kitId: 'gsi8lzd',
			scriptTimeout: 3000,
			async: true
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	})(document);
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115343983-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-115343983-1');
	</script>
	<link rel="stylesheet" id="theme-css" href="<?php echo APP_ROOT; ?>/webroot/css/styles.css" type="text/css" media="all" />
</head>
<body class="<?php echo APP_PAGE; ?>">