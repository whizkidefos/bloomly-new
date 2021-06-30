<?php 
/**
 * Template Name: FAQ Template
 */
get_header(); ?>

<section class="page top-margin-3">
    <div class="uk-container uk-container-small">
        <article class="small-container">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <ul uk-accordion>
                <?php if(have_rows('faq')): while(have_rows('faq')): the_row() ?>
                <li class="bloomly-faq">
                    <a class="uk-accordion-title" href="#">
                    <?php the_sub_field('question'); ?></a>
                    <div class="uk-accordion-content">
                        <p><?php the_sub_field('answer'); ?></p>
                    </div>
                </li>
                <?php endwhile; endif; ?>   
            </ul>
        </article>
    </div>

    <!--<img src="<?php t(); ?>/images/green-pink-lines.svg" alt="green shape" class="page-green-shape rellax" data-rellax-speed="-5">-->
    <img src="<?php t(); ?>/images/pink-shape-green-lines.svg" alt="hub orange shape" class="pink-shape-green-lines rellax">
    <img src="<?php t(); ?>/images/hub-orange-lines.svg" alt="orange green lines" class="page-orange-green-lines rellax">
</section>

<?php get_footer(); ?>