<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/theme-ctmx/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/theme-ctmx/css/styles.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee|Open+Sans:400,700">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-ctmx/js/doubletaptogo.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-ctmx/js/csth-scripts-min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63170690-8"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-63170690-8');
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
	<header id="header" role="banner">
		<nav id="menu" role="navigation">
			<a href="#menu" class="burger" title="Show Navigation">Menu</a>
    	<a href="#" class="burger" title="Hide Navigation">Menu</a>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<section id="branding">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/themes/theme-ctmx/img/continental-mixer-logo.png" alt="Continental Mixer"></a>
		</section>
		<div class="csthLink">
			<a href="<?php bloginfo('url'); ?>/?page_id=32"><img class="csthLink__img" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-ctmx/img/csth_pgTrn.png" alt="CSTH Company"></a>
		</div>
	</header>
	
	<div id="container">