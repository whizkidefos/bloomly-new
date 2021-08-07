<?php get_header();
/**
 * Template Name: Dashboard
 */
?>

<section class="dashboard">
    <div class="uk-container">
        <div class="dashboard-header uk-text-center">
            <h3>Welcome back, Simone! How are you feeling?</h3>
        </div>
        <ul class="uk-flex-center" uk-tab uk-switcher="connect: .member-content">
            <li class="uk-active"><a href="#">Your Bloomly Hub</a></li>
            <li><a href="#">Your Test Results</a></li>
            <li><a href="#">Your Order History</a></li>
            <li><a href="#">Scheduled Orders</a></li>
        </ul>

        <div class="uk-child-width-expand@s" uk-grid>
            <div class="uk-child-width-1-3@m">
                <?php do_action( 'woocommerce_account_navigation' ); ?>
            </div>
            <div class="">
            <ul class="uk-switcher member-content">
                <li>
                    <h5>Your stats</h5>
                </li>
                <li>idiot 2</li>
                <li>idiot 3</li>
                <li>idiot 4</li>
            </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>