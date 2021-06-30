<?php get_header() ?>

<section class="woocommerce-content">
    <div class="uk-container">
        <ul class="uk-breadcrumb bloomly-breadcrumb">
            <li><a href="<?php get_site_url(); ?>/">Home</a></li>
            <li><a href="<?php get_site_url(); ?>/tests">Tests</a></li>
            <li><span><?php the_title(); ?></span></li>
        </ul>
        <br>
        <div class="uk-child-width-1-2@m uk-child-width-expand@s uk-grid-large" uk-grid>
            <div class="product-images">
                <div class="gallery-container swiper-container">
                    <div class="gallery-button-prev swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
  
                    <div class="gallery-wrapper swiper-wrapper">
                    <?php 
                    $images = get_field('gallery');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $images ): ?>
                       
                            <?php foreach( $images as $image_id ): ?>
                                
                                   <div class="gallery-slide swiper-slide">
                                     <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                   </div>
                                
                            <?php endforeach; ?>
                        
                    <?php endif; ?>
                    </div>
                    <div class="gallery-button-next swiper-button-next"><i class="fas fa-chevron-right"></i></div>

                    <div class="gallery-pagination swiper-pagination"></div>
                </div>

                <div class="callout callout-teal">
                    Go premium and save £10 on this test! <a href="">Find out more</a>
                </div>
            </div>
            <div class="product-content">
               
                <div class="product-meta">
                    <div class="product-thumbnail uk-align-right"><?php the_post_thumbnail(); ?></div>
                    <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
                    <!-- <h6></?php echo wc_get_product_category_list($product->get_id()) ?></h6> -->
                </div>
                
                <?php do_action( 'woocommerce_single_product_summary' ); ?>

                <div class="callout callout-pink">
                    Purchase repeat test, cancel anytime <a href="">Find out more</a>
                </div>

            </div>
        </div>
        <br><br>

        <div class="uk-margin-medium-top">
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="#">What’s Measured</a></li>
                <li><a href="#">When to Test</a></li>
                <li><a href="#">What’s Included</a></li>
            </ul>

            <ul class="uk-switcher additional-info">
                <li>
                <?php if ( $details = get_field( 'details' ) ) : ?>
                    <?php echo $details; ?>
                <?php endif; ?>
                </li>
                <li>
                <?php if ( $markers = get_field( 'markers' ) ) : ?>
                    <?php echo $markers; ?>
                <?php endif; ?>
                </li>
                <li>
                <?php if ( $symptoms = get_field( 'symptoms' ) ) : ?>
                    <?php echo $symptoms; ?>
                <?php endif; ?>
                </li>
            </ul>
        </div>

        <!-- </?php get_template_part('components/our-tests'); ?> -->

        <?php get_template_part('components/thoughts'); ?>

        <?php get_template_part('components/ssl-data-protection'); ?>

    </div>
    <img src="<?php t(); ?>/images/pink-shape-green-lines.svg" alt="hub orange shape" class="pink-shape-green-lines rellax">
    <img src="<?php t(); ?>/images/hub-orange-lines.svg" alt="orange green lines" class="page-orange-green-lines rellax">
</section>

<?php get_footer() ?>