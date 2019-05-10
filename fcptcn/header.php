<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fcptcn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	
	<header id="masthead" class="site-header">
		<div class="headerTop">
			<div class="container">
				<div class="headerLeft hlogocontact">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_field('header_image_logo', 'option'); ?>" class="img-responsive"></a>
				</div>
				<div class="headerRight hlogocontact">
					<p class="forInq"><?php echo get_field('header_text', 'option'); ?></p>
					<p class="contactNumber"><a href="tel:<?php echo get_field('header_contact_number', 'option'); ?>"><?php echo get_field('header_contact_number', 'option'); ?></a></p>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		         <?php
			            wp_nav_menu( array(
			                'menu'              => 'main-menu',
			                'theme_location'    => 'primary',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse',
			                'container_id'      => 'bs-example-navbar-collapse-1',
			                'menu_class'        => 'nav navbar-nav',
			                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			                'walker'            => new WP_Bootstrap_Navwalker())
			            );
			        ?>
		    </div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
