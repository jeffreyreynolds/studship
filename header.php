<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
		<!-- Remy Sharp Shim --> 
		<!--[if lt IE 9]> 
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]--> 
		
		<!--STYLESHEETS-->
		<!--STYLESHEET main-->		
			<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />
			
		<!--STYLESHEET LESS-->	
			<link rel="stylesheet/less" href="style.less" type="text/css">
			
		<!--STYLESHEET scc footer-->		
			<link href="footer-scc.css" rel="stylesheet" type="text/css" media="screen">		

		<!--STYLESHEET - meteor slider-->						
			<link href="meteor-slides.css" rel="stylesheet/css" type="text/css">
		
		<!--FONTS-->
			<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

			<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,700,700italic' rel='stylesheet' type='text/css'>

		<!--WP-->
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
			<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

		<!--jQ-->		
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<!--LESS JS-->		
		<script src="less.js" type="text/javascript"></script>
		
		<!-- Timely Calendar Code -->
		<script class="ai1ec-widget-placeholder" data-widget="ai1ec_agenda_widget" data-events_seek_type="events" data-events_per_page="5" data-days_per_page="7">
			(function(){var d=document,s=d.createElement('script'),
			i='ai1ec-script';if(d.getElementById(i))return;s.async=1;
			s.id=i;s.src='http://54.213.153.237/?ai1ec_js_widget';
			d.getElementsByTagName('head')[0].appendChild(s);})();
		</script>
		
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
		<!--start SCC-HEADER-->
			<div id="scc-header">
				<div id="scc-header-center" >
						<a href="http://www.seattlecentral.edu">
								<img id="header-logo" src="http://scccstudentleadership.org/wordpress-210/wp-content/uploads/2014/12/seattle-central-college-logo.png" alt="Seattle Central Logo" />
						</a>
				</div><!--.scc-header-center-->
			</div><!--#scc-header-->		
		<!--end SCC-HEADER-->

			<div id="sl-header">
				<div id="sl-header-center">

					<h1>
						<a href= "http://scccstudentleadership.org/wordpress-210/" >Student Leadership</a> at 
						<a href="http://seattlecentral.edu"><span>Seattle Central College</span></a>
					</h1>

					<div id="slider-panel-nav-wrap">

							<div id="slider-zone">
							
									<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
								
								<div id="slider-panel">
								<h4>Get Involved!<br>We have a place for you!</h4>								
								</div><!--#slider-panel-->	
								
							</div><!--#slider-zone-->

					</div><!--#slider-panel-nav-wrap-->
			
			</div><!--#sl-header-center-->	
		</div><!--#sl-header-->				
			
			<!-- START NAVIGATION -->

			<nav>
				<div id="nav-main">
					<div id="nav-center">
						<?php wp_nav_menu( array( 
							'theme_location' => 'main-menu' ,
							'menu' => 'Main Menu' ,
							'container'  => 'ul', 
						) ); ?>	
					</div><!--#nav-center-->

	
					
				</div><!--#nav-main-->		

			</nav>
				<!--start breadcrumb-->
					<div id="bread-box">
							<div class="breadcrumbs">
								<?php if(function_exists('bcn_display'))
								{
									bcn_display();
								}?>
							</div><!--.breadcrumbs-->		
					</div><!--#bread-box-->							
				<!--end breadcrumb-->
				
				<!-- END NAVIGATION -->
	
<!--************************end header**********************-->

	</header>
