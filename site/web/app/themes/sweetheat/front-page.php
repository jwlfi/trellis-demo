<?php
get_header();
?>
<h1 class="home-strap">theatrical adventures, experiences and games</h1>
<?php
    $carousel_slides_query = new WP_Query( array(
            'post_type' => 'carousel_slide',
            'orderby' => 'date',
	        'order'   => 'ASC',
    ) );

    if ( $carousel_slides_query->have_posts() ) { ?>

    <div class="home-section home-feefo-slider">
        <div id="Glide" class="glide">

            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<">Prev</button>
                <button class="glide__arrow next" data-glide-dir=">">Next</button>
            </div>

            <div class="glide__wrapper">
                <ul class="glide__track">

                    <?php while ( $carousel_slides_query->have_posts() ) {
                        $carousel_slides_query->the_post();
                        $carousel_slide_id = get_the_id(); ?>

                        <li class="glide__slide">
                            <div class="home-carousel-slider-slide">
                                <?php the_post_thumbnail('post_thumbnail', array('class' => 'home-slider-slide-face'));?>
                                <div class="home-carousel-slider-slide-text">
                                    <div class="home-carousel-slider-slide-quote">
                                        <?php echo get_post_meta($carousel_slide_id, 'carousel_slides_slide_quote', true); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
<?php
/* Restore original Post Data */
wp_reset_postdata();
} else {
    // no posts found
} ?>

<h2 class="home-bottom-strap">immersive  -  interactive   -    bespoke</h2

<?php get_footer(); ?>