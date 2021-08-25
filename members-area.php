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
            <li><a href="#">Account Settings</a></li>
        </ul>

        <ul class="uk-switcher member-content">
            <li>
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
            </li>
            <li>
                <div class="test-results">
                    <div class="test-result">
                        <img src="<?php t() ?>/images/dna-test.png" alt="">
                        <div class="test-result-summary">
                            <p>Test name: <span>Male Health Testing Kit, General</span></p>
                            <p>Date ordered: <span>10 November 2021</span></p>
                            <p>Date results recieved: <span>14 November 2021</span></p>
                            <p>Order no: <span>332*1</span></p>
                        </div>
                        <a href="#testDetails" class="bloomly-btn-teal" uk-toggle>View detail</a>
                    </div>
                    <div class="test-results">
                    <?php
                    $ascribed_to = get_field( 'ascribed_to' );
                    if ( $ascribed_to ) : ?>
                        <a href="<?php echo get_author_posts_url( $ascribed_to['ID'] ); ?>"><?php echo esc_html( $ascribed_to['display_name'] ); ?>Title</a>
                    <?php endif; ?>
                    </div>
                </div>
            </li>
            <li>
                <?php do_action('woocommerce_account_orders'); ?>
            </li>
            <li>idiot 4</li>
            <li>
                <?php do_action('woocommerce_account_content'); ?>
                <?php do_action('woocommerce_edit_account_address_form'); ?>
                <?php do_action('woocommerce_account_navigation'); ?>
            </li>
        </ul>  
    </div>
</section>

<!-- This is the modal -->
<div id="testDetails" class="" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="test-details-header">
            <div class="test-details-header-left">
                <img src="<?php t() ?>/images/dna-test.png" alt="">
                <div class="test-details-header-left-title">
                    <h5>Male Health Testing Kit, General</h5>
                    <p>10 November 2021</p>
                </div>
            </div>
            <a href="<?php get_home_url() ?>/tests" class="bloomly-btn-teal">Reorder</a>
        </div>

        <div class="" uk-grid>
            <div class="">
                <p>Patient ID: <span>71</span></p>
                <p>D.O.B: <span>07 September 95</span></p>
                <p>Sample taken: <span>07/06/2021</span></p>
            </div>
            <div class="">
                <p>Name: <span>David Mark</span></p>
                <p>Gender: <span>Male</span></p>
                <p>Results received: <span>10 November 2021</span></p>
            </div>
        </div>

        <h5>Description</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quaerat maxime nisi tempore dolore! Nulla culpa nam in quod minima.</p>

        <h5>SW1</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime asperiores ea, id cumque minima ex nihil perspiciatis obcaecati tenetur blanditiis, tempora ducimus possimus soluta sapiente aspernatur exercitationem fugit ipsam doloremque.</p>
    </div>
</div>

<?php get_template_part('components/latest-news'); ?>

<?php get_template_part('components/ssl-data-protection'); ?>

<?php get_footer(); ?>