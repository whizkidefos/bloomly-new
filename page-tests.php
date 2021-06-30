<?php get_header(); ?>
<?php

$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
    $cat_thumb_url = wp_get_attachment_thumb_url( $cat_thumb_id );
    $term_link = get_term_link( $prod_cat, 'product_cat' );
?>

<section class="tests">
    <div class="uk-container">

        <div class="uk-margin-medium-top">
            <h3 class="uk-text-center">Our Home Health Tests</h3>
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="">All</a></li>
                <li><a href="#">General Health</a></li>
                <li><a href="#">Male Health</a></li>
                <li><a href="#">Female Health</a></li>
                <li><a href="#">Wellness Collections</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid-match" uk-grid>
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    );
                $loop = new WP_Query( $args );
                ?>
                <?php if ( $loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="">
                        <div class="test-card">
                            <?php the_post_thumbnail() ?>
                            <!-- <div class="add-to-cart">
                                <i class="fal fa-cart-plus"></i>
                            </div> -->
                            <div class="test-title">
                                <h4><?php the_title(); ?></h4>
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
                                <?php echo wp_trim_words( get_the_excerpt(), 16, '...' ); ?>
                            </p>
                            <div class="uk-text-center">
                                <a href="<?php the_permalink(); ?>" class="bloomly-btn-teal uk-text-center">Find out more</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </li>
                
                <li class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid-match" uk-grid>
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'product_cat' => 'general-health',
                        );
                    $gh = new WP_Query( $args );
                    ?>
                    <?php if ( $gh->have_posts() ): while ( $gh->have_posts() ) : $gh->the_post(); ?>
                    <div class="">
                        <div class="test-card">
                            <?php the_post_thumbnail() ?>
                            <!-- <div class="add-to-cart">
                                <i class="fal fa-cart-plus"></i>
                            </div> -->
                            <div class="test-title">
                                <h4><?php the_title(); ?></h4>
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
                                <?php echo wp_trim_words( get_the_excerpt(), 16, '...' ); ?>
                            </p>
                            <div class="uk-text-center">
                                <a href="<?php the_permalink(); ?>" class="bloomly-btn-teal uk-text-center">Find out more</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </li>

                <li class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid-match" uk-grid>
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'product_cat' => 'male-health',
                        );
                    $mh = new WP_Query( $args );
                    ?>
                    <?php if ( $mh->have_posts() ): while ( $mh->have_posts() ) : $mh->the_post(); ?>
                    <div class="">
                        <div class="test-card">
                            <?php the_post_thumbnail() ?>
                            <!-- <div class="add-to-cart">
                                <i class="fal fa-cart-plus"></i>
                            </div> -->
                            <div class="test-title">
                                <h4><?php the_title(); ?></h4>
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
                                <?php echo wp_trim_words( get_the_excerpt(), 16, '...' ); ?>
                            </p>
                            <div class="uk-text-center">
                                <a href="<?php the_permalink(); ?>" class="bloomly-btn-teal uk-text-center">Find out more</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </li>

                <li class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid-match" uk-grid>
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'product_cat' => 'female-health',
                        );
                    $fh = new WP_Query( $args );
                    ?>
                    <?php if ( $fh->have_posts() ): while ( $fh->have_posts() ) : $fh->the_post(); ?>
                    <div class="">
                        <div class="test-card">
                            <?php the_post_thumbnail() ?>
                            <!-- <div class="add-to-cart">
                                <i class="fal fa-cart-plus"></i>
                            </div> -->
                            <div class="test-title">
                                <h4><?php the_title(); ?></h4>
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
                                <?php echo wp_trim_words( get_the_excerpt(), 16, '...' ); ?>
                            </p>
                            <div class="uk-text-center">
                                <a href="<?php the_permalink(); ?>" class="bloomly-btn-teal uk-text-center">Find out more</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </li>

                <li class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid-match" uk-grid>
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'product_cat' => 'wellness-collections',
                        );
                    $wellness_collections = new WP_Query( $args );
                    ?>
                    <?php if ( $wellness_collections->have_posts() ): while ( $wellness_collections->have_posts() ) : $wellness_collections->the_post(); ?>
                    <div class="">
                        <div class="test-card">
                            <?php the_post_thumbnail() ?>
                            <!-- <div class="add-to-cart">
                                <i class="fal fa-cart-plus"></i>
                            </div> -->
                            <div class="test-title">
                                <h4><?php the_title(); ?></h4>
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
                                <?php echo wp_trim_words( get_the_excerpt(), 16, '...' ); ?>
                            </p>
                            <div class="uk-text-center">
                                <a href="<?php the_permalink(); ?>" class="bloomly-btn-teal uk-text-center">Find out more</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </li>

                <li class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid-match" uk-grid>
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'product_cat' => 'general-health',
                        );
                    $gh = new WP_Query( $args );
                    ?>
                    <?php if ( $gh->have_posts() ): while ( $gh->have_posts() ) : $gh->the_post(); ?>
                    <div class="">
                        <div class="test-card">
                            <?php the_post_thumbnail() ?>
                            <!-- <div class="add-to-cart">
                                <i class="fal fa-cart-plus"></i>
                            </div> -->
                            <div class="test-title">
                                <h4><?php the_title(); ?></h4>
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
                                <?php echo wp_trim_words( get_the_excerpt(), 16, '...' ); ?>
                            </p>
                            <div class="uk-text-center">
                                <a href="<?php the_permalink(); ?>" class="bloomly-btn-teal uk-text-center">Find out more</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </li>

            </ul>
        </div>

    </div>
    <img src="<?php t(); ?>/images/orange-green-lines.svg" alt="news shape" class="tests-shape1">
    <img src="<?php t(); ?>/images/green-pink-lines.svg" alt="news shape" class="tests-shape2">
    <img src="<?php t(); ?>/images/hub-orange-lines.svg" alt="news shape" class="tests-shape3">
</section>

<?php get_template_part('components/ssl-data-protection'); ?>

<?php get_footer(); ?>