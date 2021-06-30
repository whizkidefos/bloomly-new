<?php get_header(); ?>

<section class="page">
    <div class="uk-container uk-container-small">
        
        <article class="small-container top-margin-3">
            <h3><?php the_title(); ?></h3>
            <?php if(has_post_thumbnail()): 
            the_post_thumbnail();    
            ?>
            <?php endif; ?>
            <?php the_content(); ?>
        </article>

    </div>

    <!--<img src="<?php t(); ?>/images/green-pink-lines.svg" alt="green shape" class="page-green-shape rellax" data-rellax-speed="-5">-->
    <img src="<?php t(); ?>/images/pink-shape-green-lines.svg" alt="hub orange shape" class="pink-shape-green-lines rellax">
    <img src="<?php t(); ?>/images/hub-orange-lines.svg" alt="orange green lines" class="page-orange-green-lines rellax">
</section>

<?php get_template_part('components/ssl-data-protection'); ?>

<?php get_footer(); ?>