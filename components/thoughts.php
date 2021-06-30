

<section class="thoughts">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid>
            <div class="">
                <img src="<?php t(); ?>/images/thoughts.png" alt="thoughts">
            </div>
            <div class="">
                <div class="thoughts-content uk-margin-large-top">
                    <h3>You’re in good company</h3>
                    <div class="thoughts-container swiper-container">
                        <div class="thoughts-wrapper swiper-wrapper">
                            <?php if (have_rows('review', 'option')): while (have_rows('review', 'option')): the_row() ?>
                            <div class="thoughts-slide swiper-slide">
                                <blockquote>"<?php the_sub_field('quote'); ?>"</blockquote>
                                <small><?php the_sub_field('name'); ?></small>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class="thoughts-controls">
                            <div class="thoughts-button-prev swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="thoughts-button-next swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>