<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 8,
    );
$article = new WP_Query( $args );
?>

<section class="latest-news">
    <div class="uk-container">
        <div class="uk-flex uk-flex-wrap uk-flex-between uk-flex-middle uk-flex-column@s">
            <h3>Latest News & Thoughts</h3>
            <a href="<?php get_site_url(); ?>/blogs" class="bloomly-btn-blue" class="uk-align-right">See all blogs</a>
        </div>
        <div class="latest-news-outer-container">
        <div class="news-button-next swiper-button-next"><i class="fas fa-chevron-right"></i></div>
            <div class="news-container swiper-container">
                <div class="news-wrapper swiper-wrapper">
                    <?php if( $article->have_posts() ): while( $article->have_posts() ): $article->the_post(); ?>
                    <div class="news-slide swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <h5><?php the_title() ?></h5>
                        </a>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
                <!-- <div class="news-pagination swiper-pagination"></div> -->
            </div>
            <div class="news-button-prev swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
            <!-- <div class="news-controls">
                <div class="news-button-next swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                <div class="news-button-prev swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
            </div> -->
            <img src="<?php t(); ?>/images/news-shape.svg" alt="news shape" class="news-shape">
        </div>
    </div>
</section>
