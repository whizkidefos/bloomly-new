<?php get_header(); ?>

<section class="blog-post">
    <div class="uk-container">
        <div class="" uk-grid>
            <div class="uk-width-1-3@m uk-flex-last uk-flex-last@s uk-flex-first@m uk-flex-first@l">
                <a href="<?php get_site_url(); ?>/blogs" class="bloomly-btn-underline"><i class="fas fa-arrow-left"></i> Back to all blogs</a>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam sapiente accusantium incidunt nostrum fugit! Ducimus voluptate cupiditate, harum dolorem iure saepe quidem natus mollitia. Error cumque delectus et inventore nulla.</p>
                <a href="" class="bloomly-btn-blue">call to action</a>
                <hr>
                <h4>Recent Posts</h4>
                <ul class="recent-posts">
                <?php 
                $the_query = new WP_Query( 'posts_per_page=5' ); ?>
                
                <?php 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>
                
                <li>
                    <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail(); ?>
                        <h6><?php the_title(); ?></h6>
                    </a>
                </li>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>
                </ul>
            </div>
            <div class="uk-width-expand@m uk-flex-first uk-flex-first@s uk-flex-last@m uk-flex-last@l">
                <article class="blog-article">
                    <?php the_post_thumbnail(); ?>
                    <h5><i class="fas fa-folders"></i> <?php the_category(''); ?></h5>
                    <h1><?php the_title(); ?></h1>
                    <small><i class="fas fa-user-clock"></i> Written By: <?php the_author(); ?> | On <?php echo get_the_date(); ?></small>
                    <p><?php the_excerpt(); ?></p>
                    <hr>
                    <?php the_content(); ?>
                    <hr>
                    <?php the_tags( '<ul class="tags-single"><li>', '</li><li>', '</li></ul>' ); ?>
                </article>
            </div>
        </div>
    </div>
    <img src="<?php t(); ?>/images/green-pink-lines.svg" alt="green shape" class="left-green-shape rellax" data-rellax-speed="-5">
    <img src="<?php t(); ?>/images/hub-orange-lines.svg" alt="hub orange shape" class="hub-orange-lines-blogs rellax">
    <img src="<?php t(); ?>/images/orange-green-lines.svg" alt="orange green lines" class="orange-green-lines rellax">
</section>

<?php get_footer(); ?>