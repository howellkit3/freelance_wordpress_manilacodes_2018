<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <div class="mobile-header">
        <div class="mobile-header-wrap">
        <div class="mobile-col-md">
            <button class="navbar-toggler" type="button">
            <span class="fas fa-bars"></span>
            </button>
        </div>
        <div class="mobile-col-lg">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("main-logo") ) : ?>
            <?php endif; ?>
        </div>
        <div class="mobile-col-md">
            <a href="mailto:example@email.com" class="email-btn">
                <i class="far fa-envelope"></i>
                <span class="hidden">Email</span>
            </a>
        </div>
        </div>
        <div class="mobile-header-nav">
            <?php
            wp_nav_menu(array(
            'theme_location'    => 'primary',
            'container'       => 'div',
            'container_id'    => 'mobile-nav',
            'container_class' => 'mobile-nav',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav',
            'depth'           => 3,
            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
            'walker'          => new wp_bootstrap_navwalker()
            ));
            ?>
        </div>
    </div>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="header-upper"></div>
        <div class="header-lower">
            <div class="container">
                <nav class="navbar navbar-expand-xl p-0">
                    <div class="navbar-brand">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("main-logo") ) : ?>
                            <a href="[blogurl]">
                                <img class="img responsive" src="" alt="Manila Codes" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="navigation-wrap">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                        wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'main-nav',
                        'container_class' => 'navigation',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div>
                    <div class="social-media-wrap">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("social-media") ) : ?><?php endif; ?>
                    </div>
                </nav>
            </div>
        </div>
	</header>
	<div id="content" class="site-content">

    <?php endif; ?>