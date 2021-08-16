<?php

//Inc files
//require("inc/woo-custom-hooks.php");
//include('/inc/custom-login.php');

// Theme Files
function bloomly_files() {
    if ( !is_admin() ) wp_deregister_script('jquery');

    wp_enqueue_style( "sofia_pro_font", "https://use.typekit.net/ght2kva.css" );
   
    wp_enqueue_style( "uikit_css", get_template_directory_uri()."/css/uikit.min.css" );
    wp_enqueue_style( "swiper_css", get_template_directory_uri()."/css/swiper.min.css" );
    wp_enqueue_style( "bloomly_css", get_template_directory_uri()."/css/bloomly.css" );

    wp_enqueue_script( "font_awesome_kit", "https://kit.fontawesome.com/c95cb70159.js", array(), '5.15.1', true );
    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js', array(), '3.5.1', true );
    wp_enqueue_script( 'uikit_js', get_template_directory_uri(). '/js/uikit.min.js', array(), '3.5.4', true );
    wp_enqueue_script( 'uikit_icons_js', get_template_directory_uri(). '/js/uikit-icons.min.js', array(), '3.5.4', true );
	wp_enqueue_script( 'swiper_js', get_template_directory_uri().'/js/swiper.min.js', array(), '6.3.5', true );
	wp_enqueue_script( 'rellax_js', get_template_directory_uri().'/js/rellax.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bloomly_js', get_template_directory_uri().'/js/bloomly.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'bloomly_files', );

/*============ Setup Theme ===========*/
function bloomly_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );
    add_theme_support( 'woocommerce' );

    // Register Menus
    function bloomly_menus() {
        register_nav_menus( 
            array (
                'main-menu'         => 'Main Menu',
                'useful-links'      => 'Useful links',
                'quick-links'       => 'Quick links',
                'how-it-works'      => 'How it works',
            )
        );
    }
    add_action( 'init', 'bloomly_menus' );
    }
add_action( 'after_setup_theme', 'bloomly_setup' );

// Courses ContentType
function create_posttype() {
 
    register_post_type( 'results',
    // CPT Options
        array(
            'labels' => array(
                'name'          => __( 'Results' ),
                'singular_name' => __( 'Result' )
            ),
            'public'        => true,
            'has_archive'   => true,
            'rewrite'       => array('slug' => 'results'),
            'show_in_rest'  => true,
            'menu_icon'     => 'dashicons-filter',
            'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*============ Custom Functions ===========*/
function t() {
    echo esc_url( get_template_directory_uri() );
}

// Pagination
function bloomly_pagination(){
    global $wp_query; 
    the_posts_pagination();
}

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

// Featured image instructions
function bloomly_featured_image_dimensions( $content, $post_id, $thumbnail_id ){
    $help_text = '<p>' . __( 'Recommended Dimensions - W1200px, H980px', 'bloomly' ) . '</p>';
    return $help_text . $content;
}
add_filter( 'admin_post_thumbnail_html', 'bloomly_featured_image_dimensions', 10, 3 );

// Tags Cloud
function bloomly_tag_cloud() { 
    $tags = get_tags();
    $args = array(
        'smallest'                  => 10, 
        'largest'                   => 22,
        'unit'                      => 'px', 
        'number'                    => 10,  
        'format'                    => 'flat',
        'separator'                 => " ",
        'orderby'                   => 'count', 
        'order'                     => 'DESC',
        'show_count'                => 1,
        'echo'                      => false
); 
 
$tag_string = wp_generate_tag_cloud( $tags, $args );
 
return $tag_string; 
 
}

// Add a shortcode so that we can use it in widgets, posts, and pages
add_shortcode('bloomly_popular_tags', 'bloomly_tag_cloud'); 
 
// Enable shortcode execution in text widget
add_filter ('widget_text', 'do_shortcode');

/*================ Theme Options ===================== */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title'            =>      'Global Options',
            'menu_title'            =>      'Global Options',
            'menu_slug'             =>      'global-options',
            'capabilities'          =>      'edit_posts'
        )
    );
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Global Theme Options',
		'menu_title'	=> 'Global Theme Options',
		'parent_slug'	=> 'global-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'global-options',
	));
}

/*============ Woocommerce Support ===========*/
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Rename Products to Tests
// add_filter( 'gettext', 'change_woocommerce_product_text', 20, 3 );

// function change_woocommerce_product_text( $translated_text, $text, $domain ) {
// 	switch ( $translated_text ) {
// 		case 'Product' :
// 			$translated_text = __( 'Test', 'woocommerce' );
// 			break;
// 	}
//     return $translated_text;
// }

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

// Redirect WooCommerce Shop URL
function wpc_shop_url_redirect() {
    if( is_shop() ){
        wp_redirect( home_url( '/tests/' ) ); // Assign custom internal page here
        exit();
    }
}
add_action( 'template_redirect', 'wpc_shop_url_redirect' );

//Add to cart functionality
add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart'); 

add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');  

function ql_woocommerce_ajax_add_to_cart() {  
    $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $variation_id = absint($_POST['variation_id']);
    $passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);
    $product_status = get_post_status($product_id); 
    if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) { 
    do_action('ql_woocommerce_ajax_added_to_cart', $product_id);
        if ('yes' === get_option('ql_woocommerce_cart_redirect_after_add')) { 
            wc_add_to_cart_message(array($product_id => $quantity), true); 
        } 
        WC_AJAX :: get_refreshed_fragments(); 
        } else { 
            $data = array( 
                'error' => true,
                'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));
            echo wp_send_json($data);
        }
        wp_die();
}

//Replace style-login.css with the name of your custom CSS file
function bloomly_custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}

//This loads the function above on the login page
add_action( 'login_enqueue_scripts', 'bloomly_custom_login_stylesheet' );

function login_error_override()
{
    return 'Incorrect login details.';
}
add_filter('login_errors', 'login_error_override');

function login_checked_remember_me() {
    add_filter( 'login_footer', 'rememberme_checked' );
    }
    add_action( 'init', 'login_checked_remember_me' );
    
    function rememberme_checked() {
    echo "<script>document.getElementById('rememberme').checked = true;</script>";
    }

// Custom Logo
function blsc_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('./images/logo-green.svg');
        height:100px;
        width:300px;
        background-size: 300px 100px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'blsc_login_logo' );

function blsc_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'blsc_login_logo_url' );