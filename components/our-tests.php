<?php

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12,
    );
$loop = new WP_Query( $args );

// $cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
//     $cat_thumb_url = wp_get_attachment_thumb_url( $cat_thumb_id );
//     $term_link = get_term_link( $prod_cat, 'product_cat' );

?>

<section class="our-tests">
    <div class="uk-container">
        <h3 class="uk-text-center">Explore Our Tests</h3>
        <br>
        <div class="our-tests-wrapper">
        <div class="tests-button-prev swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
            <div class="tests-container swiper-container">
            
                <div class="tests-wrapper swiper-wrapper">
                <?php if ( $loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="tests-slide swiper-slide">
                        <div class="test-card">
                            <?php the_post_thumbnail() ?>
                            <!-- <div class="add-to-cart">
                                <i class="fal fa-cart-plus"></i>
                            </div> -->
                            <div class="test-title">
                                <h4><?php the_title(); ?></h4>
                                <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
                                <h6><?php echo wc_get_product_category_list($product->get_id()) ?></h6>
                            </div>
                            <div class="test-prices">
                                <div class="member-price">
                                    <small>Regular Price:</small>
                                    <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
                                    <h5><?php echo $product->get_price_html(); ?></h5>
                                </div>
                                <div class="premium-price">
                                    <small>Health Club Price</small>
                                    <h5>£50.00</h5>
                                </div>
                            </div>
                            <p class="test-details">
                                <?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
                            </p>
                            <div class="uk-text-center">
                                <a href="<?php the_permalink(); ?>" class="bloomly-btn-teal uk-text-center">Find out more</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>

                     <!-- <div class="tests-slide swiper-slide">
                        <div class="test-card">
                            <img src="<?php t(); ?>/images/female-test.png" alt="" class="test-img">
                            <div class="add-to-cart">
                                <i class="fad fa-cart-plus"></i>
                            </div>
                            <div class="test-title">
                                <h4>Test Title</h4>
                                <h6>Male test kit</h6>
                            </div>
                            <div class="test-prices">
                                <div class="member-price">
                                    <small>Member price:</small>
                                    <h5>£100.00</h5>
                                </div>
                                <div class="premium-price">
                                    <small>Premium member price</small>
                                    <h5>£50.00</h5>
                                </div>
                            </div>
                            <p class="test-details">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi eligendi, nam fugiat fugit dolor rem accusantium culpa ipsam! Reprehenderit, assumenda.
                            </p>
                            <div class="uk-text-center">
                                <a href="#" class="bloomly-btn-teal">Find out more</a>
                            </div>
                        </div>
                    </div> -->

                     <!-- <div class="tests-slide swiper-slide">
                        <div class="test-card">
                            <img src="<?php t(); ?>/images/general-test.png" alt="" class="test-img">
                            <div class="add-to-cart">
                                <i class="fad fa-cart-plus"></i>
                            </div>
                            <div class="test-title">
                                <h4>Test Title</h4>
                                <h6>Male test kit</h6>
                            </div>
                            <div class="test-prices">
                                <div class="member-price">
                                    <small>Member price:</small>
                                    <h5>£100.00</h5>
                                </div>
                                <div class="premium-price">
                                    <small>Premium member price</small>
                                    <h5>£50.00</h5>
                                </div>
                            </div>
                            <p class="test-details">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi eligendi, nam fugiat fugit dolor rem accusantium culpa ipsam! Reprehenderit, assumenda.
                            </p>
                            <div class="uk-text-center">
                                <a href="#" class="bloomly-btn-teal">Find out more</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="tests-slide swiper-slide">
                        <div class="test-card">
                            <img src="<?php t(); ?>/images/male-test.png" alt="" class="test-img">
                            <div class="add-to-cart">
                                <i class="fad fa-cart-plus"></i>
                            </div>
                            <div class="test-title">
                                <h4>Test Title</h4>
                                <h6>Male test kit</h6>
                            </div>
                            <div class="test-prices">
                                <div class="member-price">
                                    <small>Member price:</small>
                                    <h5>£100.00</h5>
                                </div>
                                <div class="premium-price">
                                    <small>Premium member price</small>
                                    <h5>£50.00</h5>
                                </div>
                            </div>
                            <p class="test-details">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi eligendi, nam fugiat fugit dolor rem accusantium culpa ipsam! Reprehenderit, assumenda.
                            </p>
                            <div class="uk-text-center">
                                <a href="#" class="bloomly-btn-teal">Find out more</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                
            </div>

            <div class="tests-button-next swiper-button-next"><i class="fas fa-chevron-right"></i></div>

            <!-- <div class="tests-controls">
                <div class="tests-button-prev swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                <div class="tests-button-next swiper-button-next"><i class="fas fa-chevron-right"></i></div>
            </div> -->
        </div>
    </div>
</section>