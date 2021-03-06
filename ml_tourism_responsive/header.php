<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Modern WP Themes
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header header-fix" role="banner">
		<div class="clearfix container">
			<div class="site-branding">
            
               <?php if ( of_get_option('custom_logo') == '' ): ?>
               
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</<?php echo $heading_tag; ?>>
              
                <?php else : ?>
                
			<?php if ( of_get_option( 'custom_logo' ) ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo of_get_option( 'custom_logo' ); ?>" /></a>
			<?php } ?>


                <?php endif; ?>
                
				<?php if ( of_get_option('site_description')=='' ): ?><div class="site-description"><?php bloginfo( 'description' ); ?></div><?php endif; ?>
								
			<!-- .site-branding --></div>
            
           	<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
			<?php endif; ?>

			<nav id="main-navigation" class="main-navigation" role="navigation">
				<a href="#main-navigation" class="nav-open">Menu</a>
				<a href="#" class="nav-close">Close</a>
				<?php wp_nav_menu( array( 'container_class' => 'clearfix sf-menu', 'theme_location' => 'main' ) ); ?>
			<!-- #main-navigation -->
          </nav>
		</div>
	<!-- #masthead --></header> 

	<div id="main" class="site-main">
		<div class="clearfix container">