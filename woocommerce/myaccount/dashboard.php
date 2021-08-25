<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>

<p>
	<?php
	printf(
		/* translators: 1: user display name 2: logout url */
		wp_kses( __( 'Hello %1$s, how are you feeling today? (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ), $allowed_html ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
	);
	?>
</p>

<p>
	<?php
	/* translators: 1: Orders URL 2: Address URL 3: Account URL. */
	//$dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
	if ( wc_shipping_enabled() ) {
		/* translators: 1: Orders URL 2: Addresses URL 3: Account URL. */
		// $dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
	}
	printf(
		wp_kses( $dashboard_desc, $allowed_html ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
	?>
</p>

<div class="your-stats">
                    <div class="your-stats-top">
                        <h5>Your Stats</h5>
                        <div class="your-stats-top-right">
                            <p>Last updated on: 25/10/2021</p>
                            <a href="/" class="bloomly-btn-teal">Update</a>
                        </div>
                    </div>

                    <div class="your-stats-details uk-grid-match" uk-grid>
                        <div class="uk-width-1-6@m stat-boxes">
                            <div class="stat-box-rect">
                                <i class="fal fa-dumbbell"></i>
                                <h6>Exercise</h6>
                                <small>3.5 - 4 hours/week</small>
                            </div>
                            <div class="stat-box-rect">
                                <i class="fal fa-bed"></i>
                                <h6>Sleep</h6>
                                <small>10 - 11 hours/night</small>
                            </div>
                            <div class="stat-box-rect">
                                <i class="fal fa-walking"></i>
                                <h6>Steps</h6>
                                <small>10 - 13,000/day</small>
                            </div>
                            <div class="stat-box-rect">
                                <i class="far fa-dewpoint"></i>
                                <h6>Water</h6>
                                <small>1 - 1.2 litres/day</small>
                            </div>
                        </div>

                        <div class="uk-width-expand@m uk-text-center">
                            <div class="stats-basic-info">
                                <p class="stats-basic-info-text">
                                    <span>Age: 33</span>
                                    <span>Height: 1.67m</span>
                                    <span>Weight: 58.6kg</span>
                                </p>
                                
                                <div class="stats-details">
                                    <div class="stats-details-left">
                                        <div class="stat-box-circle">
                                            <p>Hip/waist ratio: <br> <span>0.9</span></p>
                                        </div>
                                        <div class="stat-box-circle">
                                            <p>Qrist: <br> <span>2%</span></p>
                                        </div>
                                    </div>
                                    <img src="<?php t() ?>/images/human.svg" alt="human illustration">
                                    <div class="stats-details-right">
                                        <div class="stat-box-circle">
                                            <p>BMI: <br> <span>20.8</span></p>
                                        </div>
                                        <div class="stat-box-circle">
                                            <p>Heart age: <br> <span>43</span></p>
                                        </div>
                                    </div>
                                </div>

                                <p class="">
                                    <span>Great</span>
                                    <span>Room for improvement</span>
                                    <span>Must improve</span>
                                    <span>Insufficient data</span>
                                </p>
                            </div>
                        </div>

                        <div class="uk-width-1-6@m stat-boxes">
                            <div class="stat-box-rect">
                                <i class="fal fa-heartbeat"></i>
                                <h6>Heart rate</h6>
                                <small>75 - 80/bpm</small>
                            </div>
                            <div class="stat-box-rect">
                                <i class="fal fa-heart-rate"></i>
                                <h6>Blood pressure</h6>
                                <small>90 - 100</small>
                            </div>
                            <div class="stat-box-rect">
                                <i class="fal fa-kidneys"></i>
                                <h6>Cholesterol</h6>
                                <small>200mg/dl</small>
                            </div>
                            <div class="stat-box-rect">
                                <i class="fal fa-wine-glass-alt"></i>
                                <h6>Alcohol</h6>
                                <small>6 units/day</small>
                            </div>
                        </div>
                    </div>

                    <div class="your-stats-bottom">
                        <a href="" class="reccommend-a-friend">
                            <h4>Recommend a friend <span><i class="fas fa-chevron-right"></i></span></h4>
                        </a>
                    </div>

                </div>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
