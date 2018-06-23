<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package popper
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
    
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="jquery-3.3.1.min.js"></script>

</head>

<body <?php body_class(); ?>
<?php
if ( is_page_template( 'page-templates/page-sidebar-right.php' ) ) { ?>
    <div id="page" class="hfeed site sidebar-right">
<?php
} elseif ( is_page_template( 'page-templates/page-sidebar-left.php' ) ) { ?>
    <div id="page" class="hfeed site sidebar-left">
<?php
} elseif ( is_page_template( 'page-templates/page-blank-template.php' ) ) { ?>
    <div id="page">
<?php
} 
else { ?>
    <div id="page" class="hfeed site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar' ); ?>">
<?php
}
?>


    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'popper-child' ); ?></a>


    <?php
    if ( get_header_image() ) { ?>
    <header id="masthead" class="site-header header-background-image" style="background-image: url(<?php echo get_header_image(); ?>) " role="banner">
        <?php } else { ?>
        <header id="masthead" class="site-header" role="banner">
            <?php }
            ?>
            <?php
            // <header id="masthead" class="site-header" role="banner">
            ?>
                 <div class="site-logo smhide">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <div class="screen-reader-text">Go to the home page of <?php bloginfo( 'name' ); ?></div>
                    <?php if ( has_site_icon() ) : ?>
                        <?php $site_icon = esc_url( get_site_icon_url( 270 ) ); ?>
                        <img class="site-icon" src="<?php echo $site_icon; ?>" alt="" >
                    <?php else : ?>
                        <?php $the_site_firstletter = substr(get_bloginfo('title'), 0, 1); ?>
                        <div class="site-firstletter" aria-hidden="true">
                            <?php echo $the_site_firstletter; ?>
                        </div>
                    <?php endif; ?>
                </a>
            </div>
            
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation clear" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'popper-child' ); ?></button>

				<div class="all-menus centered">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>

			</nav><!-- #site-navigation -->
		<?php endif; ?>
           




            <div class="site-branding centered<?php if ( is_singular() ) : echo ' screen-reader-text'; endif; ?>">
                <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
                <?php
                $site_description = get_bloginfo( 'description' );
                if ($site_description != null ){ ?>
                    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                <?php }
                ?>
            </div><!-- .site-branding -->


           
        </header><!-- #masthead -->

        <div id="content" class="site-content">
