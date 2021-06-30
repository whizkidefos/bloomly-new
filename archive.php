<?php

get_header();

$show_count   = true;
$pad_counts   = false;
$hierarchical = true;
$title        = '';
 
$args = array(
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);
?>

<div class="blogs-banner">
    <div class="uk-container">
        <h1><?php echo get_the_archive_title(); ?></h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut laboriosam, incidunt doloribus sit ipsa amet eligendi voluptate doloremque sint praesentium eius sunt quae perspiciatis possimus odit, qui impedit dolores assumenda?
        </p>
    </div>
</div>

<section class="blogs">
    <div class="uk-container">
        <div class="" uk-grid>
            <div class="uk-width-1-4@m">
                <div class="blogs-sidebar">
                <h4>Categories</h4>
                    <?php wp_list_categories($args); ?>
                <h4>Tags Cloud</h4>
                <div class="tags-cloud">
                    <?php echo do_shortcode('[bloomly_popular_tags]'); ?>
                </div>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-child-width-1-2@m uk-grid-match uk-grid-medium" uk-grid>
                    <?php if(have_posts()): while(have_posts()): the_post() ?>
                    <div class="">
                        <article class="blog-card uk-card uk-card-hover">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <div class="article-content">
                                <small><?php echo get_the_date(); ?> | <span>By: <?php the_author(); ?></span></small>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                            </div>
                        </a>
                    </article>
                    </div>
                    <?php endwhile; endif; ?>
                    <div class="uk-text-center uk-flex bloomly-pagination">
                        <?php bloomly_pagination(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php t(); ?>/images/green-pink-lines.svg" alt="green shape" class="left-green-shape rellax" data-rellax-speed="-5">
    <img src="<?php t(); ?>/images/hub-orange-lines.svg" alt="hub orange shape" class="hub-orange-lines-blogs rellax">
    <img src="<?php t(); ?>/images/orange-green-lines.svg" alt="orange green lines" class="orange-green-lines rellax">
</section>

<?php get_footer();?>
