<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<script type="text/javascript" src="http://use.typekit.net/zyx8twa.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<header class="header select-1 clearfix" role="banner">

			<div class="clearfix" style="width: 90%; margin:0 auto;">
				<div class="row clearfix">
					<div class="twelvecol first last">
						<a href="/" class="icon logoimg" title="Home">&nbsp;</a>
						<h1><a href="/"><b>mutable</b>horizon</a></h1>
						<h2>
							<i>by</i>
							&nbsp;
							<a href="http://brzaik.com">BRIAN ZAIK</a>
							&nbsp;&nbsp;
							<a class="icon rss" href="/?feed=rss2">&nbsp;</a>
						</h2>
					</div>
				</div>
			</div>
		
		</header> <!-- end header -->
