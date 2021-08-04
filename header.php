<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
        <link rel="icon" href="<?php t(); ?>/images/favicon.png" type="image/x-icon">>
    <?php } ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>

    <header class="nav-wrapper">
        
            <div class="bloomly-logo">
                <a href="/" class=""><img src="<?php t(); ?>/images/logo-green.svg" /></a>
            </div>
            <nav class="desktop-nav">
                <a href="/">Home</a>
                <a href="/tests">Tests</a>
                <a href="<?php get_site_url() ?>/bloomly-health-club/">Premium</a>
                <a href="/blogs">Thoughts</a>
                <!-- <a href="/"><i class="fal fa-shopping-cart"></i> Cart</a> -->
                <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
                $count = WC()->cart->cart_contents_count;
                ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php 
                if ( $count > 0 ) {
                    ?>
                    <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                    <?php
                }
                    ?></a>

                <?php } ?>
                <!-- <a href="/login" class="bloomly-btn-hub">Login</a> -->
                <?php if ( is_user_logged_in() ): ?>
                    <a href="<?php echo wp_logout_url( $_SERVER['REQUEST_URI'] ); ?>" class="bloomly-btn-hub">Logout</a> <!-- This redirects the user to the current page after logout. -->
                <?php else: ?>
                    <a href="<?php echo wp_login_url( $_SERVER['REQUEST_URI'] ); ?>" class="bloomly-btn-hub">Login</a> <!-- This redirects the user to the current page after login. -->
                <?php endif; ?>
            </nav>

            <div class="burger">
                <span class="burger-bar"></span>
            </div>
            <!-- 
            <div class="navigation-bar">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src='<?php t(); ?>/images/logo-green.svg' alt="Bloomly Logo">
                    </a>
                </div>Logo -->
                <!-- 
                <div class="right-nav">
                    </?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container'      => 'nav',
                        'container_class'=> 'main-menu'
                    );
                    wp_nav_menu( $args );
                ?>
                <a href="" uk-icon="icon: cart"> Cart</a> 
                </div>
            </div> navigation bar -->
        
    </header>

    <nav class="mobile-nav">
        <div class="mobile-nav-top-bar">
            <div class="bloomly-logo-white">
                <a href="/" class=""><img src="<?php t(); ?>/images/logo-white.svg" /></a>
            </div>

            <div class="burger">
                <span class="burger-bar"></span>
            </div>
        </div>
        
        <div class="mobile-nav-content">
            <div class="mobile-nav-links">
                <a href="/">Home</a>
                <a href="/tests">Tests</a>
                <a href="/memberships">Memberships</a>
                <a href="/blogs">Blogs</a>
                <a href="/"><i class="fad fa-cart-plus"></i> Cart</a>
                <a href="/login" class="bloomly-btn-white mobile-login">Login</a>
            </div>

            <div class="mobile-socials">
                <h3>Connect with us</h3>
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </nav>
