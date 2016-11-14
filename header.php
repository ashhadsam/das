<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link href="<?php print get_site_url() ?>/wp-content/themes/Das/library/js-css/owl.carousel.css" rel="stylesheet">
		<link href="<?php print get_site_url() ?>/wp-content/themes/Das/unslider-master/src/scss/unslider.css" rel="stylesheet">
		<link href="<?php print get_site_url() ?>/wp-content/themes/Das/jquery-ui/jquery-ui.css" rel="stylesheet">
		<link href="<?php print get_site_url() ?>/wp-content/themes/Das/library/js-css/font-awesome.min.css" rel="stylesheet">


		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<script src="<?php print get_site_url() ?>/wp-content/themes/Das/library/js-css/jquery-2.1.4.js"></script>
		<script src="<?php print get_site_url() ?>/wp-content/themes/Das/library/js-css/parallax.min.js"></script>
		<script src="<?php print get_site_url() ?>/wp-content/themes/Das/library/js-css/velocity.min.js"></script>
		<script src="<?php print get_site_url() ?>/wp-content/themes/Das/library/js-css/unslider-min.js"></script>
		<script src="<?php print get_site_url() ?>/wp-content/themes/Das/jquery-ui/jquery-ui.min.js"></script>
		<script src="<?php print get_site_url() ?>/wp-content/themes/Das/library/js-css/owl.carousel.min.js"></script>

		<script src="<?php print get_site_url() ?>/wp-content/themes/Das/library/js/custom.js"></script>
		<script>
			jQuery(document).ready(function($) {
				
				var slider1 = $('.full-slider-section').unslider();	
				$('.unslider-arrow.next').text('>');	
				$('.unslider-arrow.prev').text('<');	
				$('.unslider-arrow.next').prependTo('.unslider-nav');
				$('.unslider-arrow.prev').prependTo('.unslider-nav');


				
				 
					
				//  Delay is a custom function
				// $('#manual').on('keyup', function() {
				// 	console.log($(this).val());
				// 	// slider.unslider('next')
				// 	slider.unslider('animate:' + $(this).val());
				// });

				// $("#slider").slider({
				//   animate: "fast",
				//   min: 1,
				//   max: 6,
				//   range: "min",
				//   // value: select[ 0 ].selectedIndex + 1,
				//   slide: function( event, ui ) {
				//     // select[ 0 ].selectedIndex = ui.value - 1;
				//     console.log(ui.value);
				//     slider.unslider('animate:' + ui.value);
				//   }
				// });

			});
		</script>
		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div class="">
					
					<div id="inner-header" class="wrap cf">

						<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						
						<div class="">
						<img src="<?php print get_site_url() ?>/wp-content/themes/Das/library/images/Logo_img.png" class="logo-img" alt="logo">
							
							<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

							<?php // if you'd like to use the site description you can un-comment it below ?>
							<?php // bloginfo('description'); ?>

							<div class="collapser">
								<a href="#">&#9776;</a>
							</div>
							
							<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<?php wp_nav_menu(array(
		    					         'container' => false,                           // remove nav container
		    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
		    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
		    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
		    					         'theme_location' => 'main-nav',                 // where it's located in the theme
		    					         'before' => '',                                 // before the menu
		        			               'after' => '',                                  // after the menu
		        			               'link_before' => '',                            // before each link
		        			               'link_after' => '',                             // after each link
		        			               'depth' => 0,                                   // limit the depth of the nav
		    					         'fallback_cb' => ''                             // fallback function (if there is one)
								)); ?>

							</nav>
						</div>

					</div>
				</div>

			</header>
