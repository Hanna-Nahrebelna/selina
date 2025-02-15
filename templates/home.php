<?php
/*
Template Name: home
*/
get_header();

?>
<main>
    <section class="section first-section">
        <div class="first__container swiper">
            <?php if (have_rows('first-section__swiper')): ?>
                <div class="first-section__swiper swiper-wrapper">
                    <?php while (have_rows('first-section__swiper')):
                        the_row(); ?>
                        <div class="first-section__wrapper swiper-slide">
                            <div class="first-section__img"
                                style="background-image: url(<?php the_sub_field('first-section__image') ?>);">
                            </div>
                            <div class="first-section__background"
                                style="background-image: url(<?php the_sub_field('first-section__background') ?>);">
                                <div class="first-section__text-box">
                                    <h2 class="first-section__heading main_heading">
                                        <?php the_sub_field('first-section__heading'); ?>
                                    </h2>
                                    <p class="first-section__info">
                                        <?php the_sub_field('first-section__info'); ?>
                                    </p>
                                    <a class="first-section__button button red_medium_button"
                                        href="<?php the_sub_field('first-section__link'); ?>">
                                        <?php the_sub_field('first-section__button'); ?>
                                    </a>

                                </div>
                            </div>

                        </div>
                    <?php endwhile; ?>
                </div>

            <?php endif; ?>
        </div>
        <div class="container first-section__relative-container">
            <div class="first-section__button-paw">
                <svg class="first-section__paw-svg-pad">
                    <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-paw1"></use>
                </svg>
                <div class="pgnt">

                </div>
            </div>
        </div>
    </section>
    <section class="section partners-section">
        <div class="container">
            <div class="home-heading-wrapper partners-section__heading-wrapper">
                <h2 class="partners-section__heading section_heading">
                    <svg class="home-heading-svg" width="42" height="60">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                        </use>
                    </svg>
                    <?php the_field('partners-section__heading'); ?>
                </h2>
                <div class="partners-section__pagination">
                    <button class="partners-section__arrow-left-btn partners-section__arrow-btn">
                        <svg class="partners-section__arrow-left one-arrow" width="10.37" height="16.97">
                            <use
                                href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-to-left">
                            </use>
                        </svg>
                    </button>
                    <button class="partners-section__arrow-right-btn partners-section__arrow-btn">
                        <svg class="partners-section__arrow-right one-arrow" width="10.37" height="16.97">
                            <use
                                href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-to-right">
                            </use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="partners-section__swiper-outer">
                <div class="partners-section__swiper swiper">
                <div class="partners-section__list swiper-wrapper">
                    <?php
                    $args = array('posts_per_page' => -1, 'post_type' => 'all_partners');
                    $myposts = get_posts($args);
                    foreach ($myposts as $post):
                        setup_postdata($post); ?>
                        <div class="swiper-slide partners-section__item">
                            <img src="<?php the_field('partner_img') ?>" />
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
            </div>

            <a class="partners-section__button button red_medium_button"
                href="<?php the_field('partners-section__btn_link'); ?>">
                <?php the_field('partners-section__btn'); ?>
                <svg class="partners-section__button-svg" width="16" height="15">
                    <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-paw"></use>
                </svg>
            </a>
        </div>
    </section>
    <section class="section who-section">
        <div class="container who__container">
            <div class="home-heading-wrapper">
                <h2 class="who-section__heading section_heading">
                    <svg class="home-heading-svg" width="42" height="60">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                        </use>
                    </svg>
                    <?php the_field('who-section__heading'); ?>
                </h2>
            </div>
            <div class="who-section__wrapper">

                <div class="who-section__img">
                    <img src="<?php the_field('who-section__photo'); ?>" />
                </div>
                <div class="who-section__text-wrapper">
                    <div class="home-heading-wrapper-desk">
                        <svg class="home-heading-svg" width="42" height="60">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                            </use>
                        </svg>
                        <h2 class="who-section__heading-desk section_heading">
                            <?php the_field('who-section__heading'); ?>
                        </h2>
                    </div>
                    <p class="who-section__info">
                        <?php the_field('who-section__text'); ?>
                    </p>
                    <a class="who-section__button button red_medium_button"
                        href="<?php the_field('who-section__button-link'); ?>">
                        <?php the_field('who-section__button'); ?>
                        <svg class="who-section__button-svg" width="16" height="15">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-paw">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section direction-section">
        <div class="container">
            <div class="home-heading-wrapper">
                <h2 class="direction-section__heading section_heading">
                    <svg class="home-heading-svg" width="42" height="60">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                        </use>
                    </svg>
                    <?php the_field('direction-section__heading'); ?>
                </h2>
            </div>
            <?php if (have_rows('direction-section__repeater')): ?>
                <div class="direction-section__repeater">
                    <?php while (have_rows('direction-section__repeater')):
                        the_row();
                        ?>
                        <div class="direction-section__item">
                            <img class="direction-section__repeater-photo"
                                src="<?php the_sub_field('direction-section__repeater-photo'); ?>" width="60" height="60" />
                            <h2 class="direction-section__repeater-name">
                                <?php the_sub_field('direction-section__repeater-name'); ?>
                            </h2>
                            <p class="direction-section__repeater-text">
                                <?php the_sub_field('direction-section__repeater-text'); ?>
                            </p>
                            <a class="direction-section__repeater-btn button red_medium_button"
                                href="<?php the_sub_field('direction-section__repeater-link'); ?>">
                                <?php the_sub_field('direction-section__repeater-btn'); ?>
                                <svg class="partners-section__button-svg" width="16" height="15">
                                    <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-paw">
                                    </use>
                                </svg>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>

            <?php endif; ?>
        </div>
        </div>
    </section>
    <section class="section wcf-section">
        <div class="container">
            <div class="home-heading-wrapper">
                <h2 class="wcf-section__heading section_heading">
                    <svg class="home-heading-svg" width="42" height="60">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                        </use>
                    </svg>
                    <?php the_field('wcf-section__heading'); ?>
                </h2>
            </div>
            <div class="wcf-section__wrapper">

                <div class="wcf-section__img">
                    <img src="<?php the_field('wcf-section__photo'); ?>" />
                </div>
                <div class="wcf-section__text-wrapper">
                    <div class="home-heading-wrapper-desk">
                        <svg class="home-heading-svg" width="42" height="60">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                            </use>
                        </svg>
                        <h2 class="wcf-section__heading-desk section_heading">
                            <?php the_field('wcf-section__heading'); ?>
                        </h2>
                    </div>
                    <p class="wcf-section__info">
                        <?php the_field('wcf-section__text'); ?>
                    </p>
                    <a class="wcf-section__button button red_medium_button"
                        href="<?php the_field('wcf-section__link'); ?>">
                        <?php the_field('wcf-section__button'); ?>
                        <svg class="wcf-section__button-svg" width="16" height="15">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-paw">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section news-section">
        <div class="container">
            <div class="home-heading-wrapper news-section__heading-wrapper">
                <h2 class="news-section__heading section_heading">
                    <svg class="home-heading-svg" width="42" height="60">
                        <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                        </use>
                    </svg>
                    <?php the_field('news-section__heading'); ?>
                </h2>
                <div class="news-section__pagination">
                    <button class="news-section__arrow-left-btn news-section__arrow-btn">
                        <svg class="news-section__arrow-left one-arrow" width="10.37" height="16.97">
                            <use
                                href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-to-left">
                            </use>
                        </svg>
                    </button>
                    <button class="news-section__arrow-right-btn news-section__arrow-btn">
                        <svg class="news-section__arrow-right one-arrow" width="10.37" height="16.97">
                            <use
                                href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-to-right">
                            </use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="news-section__swiper swiper">
                <div class="news-section__list swiper-wrapper">
                    <?php
                    $counter = 0;
                   
                    
                    $args = array(
                        'orderby'           => 'date', 
                        'order'             => 'DESC',
                        'post_type' => 'news',
                        'showposts' => -1,
                        'tax_query' => array(
                            'relation' => 'OR',
                            array(
                            'taxonomy' => 'news_categories',
                            'field' => 'slug',
                            'terms' => 'webinar'
                            ),
                            array(
                            'taxonomy' => 'news_categories',
                            'field' => 'slug',
                            'terms' => 'presentation'
                            ),
                            array(
                            'taxonomy' => 'news_categories',
                            'field' => 'slug',
                            'terms' => 'our-life'
                        )
                        )
                    ); 
        
                    $myposts = get_posts( $args );
                    foreach ($myposts as $post):
                        $count = count($myposts);
                        $counter++;
                        setup_postdata($post); ?>
                        <div class="swiper-slide">

                            <div class="news-section__item">
                                <?php
                                $category_detail = get_the_category($post->ID);
                                $category_name = $category_detail[0]->cat_name;
                                $category_slug = $category_detail[0]->slug;

                                if ($category_name):
                                    ?>
                                    <div class="news-section__category <?php echo $category_slug . '' ?>">
                                        <?php echo $category_name . '' ?>
                                    </div>
                                <?php endif; ?>
                                <div class="news-section__img"><img src="<?php the_field('news_photo') ?>" /></div>
                                <div class="news-section__content-wrapper">
                                    <p class="news-section__name">
                                        <?php the_field('news_name') ?>
                                    </p>
                                    <p class="news-section__text">
                                        <?php the_field('news_text') ?>
                                    </p>

                                    <a class="news-section__button button red_medium_button"
                                        href="<?php the_field('news_link'); ?>">
                                        <?php the_field('news_btn'); ?>
                                        <svg class="news-section__button-svg" width="16" height="15">
                                            <use
                                                href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-paw">
                                            </use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="news-section__counter-wrapper">
                                <span>
                                    <?php echo $counter; ?>
                                </span>/<span>
                                    <?php echo $count; ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="exhibitions-section section">
        <div class="container">
            <h2 class="exhibitions-section__heading section_heading">
                <svg class="home-heading-svg" width="42" height="60">
                    <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                    </use>
                </svg>
                <?php the_field('exhibitions-section__heading'); ?>
            </h2>
            <div class="exhibitions-section__list">
                <?php
                $args = array(
                        'orderby'           => 'date', 
                        'order'             => 'DESC',
                        'post_type' => 'news',
                        'showposts' => 1,
                        'tax_query' => array(
                            'taxonomy' => 'news_categories',
                            'field' => 'slug',
                            'terms' => 'exhibition',
                        )
                    ); 
                $myposts = get_posts($args);
                foreach ($myposts as $post):
                    setup_postdata($post); ?>
                    <div class="exhibitions-section__item">
                        <img src="<?php the_field('news_photo') ?>" />
                        <div class="exhibitions-section__text-wrapper">
                            <div class="exhibitions-section__date">
                                <p>
                                    <svg width="18" height="18">
                                        <use
                                            href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-clock">
                                        </use>
                                    </svg>
                                    <?php the_field('news_date') ?>
                                </p>
                                <p>
                                    <svg width="18" height="18">
                                        <use
                                            href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-calendar">
                                        </use>
                                    </svg>
                                    <?php the_field('news_time') ?>
                                </p>
                            </div>
                            <p class="exhibitions-section__name">
                                <?php the_field('news_name') ?>
                            </p>
                            <p class="exhibitions-section__text">
                                <?php the_field('news_text') ?>
                            </p>
                            <a class="exhibitions-section__button button red_medium_button"
                                href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_field('news_btn'); ?>
                                <svg class="exhibitions-section__button-svg" width="16" height="15">
                                    <use
                                        href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-paw">
                                    </use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach;
                wp_reset_postdata(); ?>
        </div>
    </section>
    <section class="support-section section" style="background-image: url(<?php the_field('support-section__photo') ?>);">
            <div class="container">
                <div class="support-section__wrapper">
                    <h2 class="support-section__heading heading">
                        <svg class="home-heading-svg" width="42" height="60">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-La_cat">
                            </use>
                        </svg>
                        <?php the_field('support-section__heading') ?>
                    </h2>
                    <p class="support-section__text">
                        <?php the_field('support-section__text') ?>
                    </p>
                    <a class="support-section__button button red_medium_button"
                        href="<?php the_field('support-section__link'); ?>">
                        <?php the_field('support-section__button'); ?>
                        <svg class="support-section__button-svg" width="16" height="15">
                            <use href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#icon-paw">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>
    </section>
    <?php get_template_part('template-parts/feedbacks'); ?>
    <?php get_template_part('template-parts/contact-form'); ?>
</main>



<?php get_footer(); ?>