<?php get_header(); ?>

<section class="woocommerce-content">
    <div class="uk-container">
        <?php woocommerce_content(); ?>
        <h3>Some dummy content</h3>
        <?php get_template_part('components/thoughts'); ?>
        <?php get_template_part('components/ssl-data-protection'); ?>
    </div>
</section>

<?php get_footer(); ?>