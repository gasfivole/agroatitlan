<?php get_header(); ?>

<?php
if ($id != 142) {
    $background = 'blue-col';
} else {
    $background = 'green-col';
}
?>

<div class="product-container">

    <?php if ($id != 142): ?>

        <div class="grey-bar"></div>

    <?php endif; ?>


    <div class="container">

        <div class="back-link">

            <a href="<?php echo get_permalink( 7 ); ?>">< Regresar</a>

        </div>

        <div class="product-info">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <div class="product-preview-image elements">

                    <img src="<?php the_field('preview_image'); ?>" />

                    <div class="product-description">

                        <?php the_content(); // Dynamic Content ?>

                    </div>

                </div>

                <div class="product-main-image elements">

                    <img src="<?php the_field('product_image'); ?>" />

                </div>

            <?php endwhile; ?>
            <?php endif; ?>

            <div class="clear"></div>

        </div>

    </div>

</div>

<div class="blue-container <?php echo $background; ?>">

    <div class="container product-slider-container" style="">

        <script type="text/javascript">
            jQuery(document).ready(function ($) {

                $('.slider1').bxSlider({
                    slideWidth: 200,
                    minSlides: 2,
                    maxSlides: 4,
                    slideMargin: 45,
                    pager: false
                });

                var highestCol = Math.max($('.product-preview-image').height(),$('.product-main-image').height());
                $('.elements').height(highestCol);
            });
        </script>

        <span class="sub-products-title">PRODUCTOS</span>

        <div class="slider1">

            <?php $loop = new WP_Query( array( 'post_type' => 'producto', 'post_parent' => $id ) ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="slide">
                    <div class="product-image">
                        <img src="<?php the_field('preview_image'); ?>" />
                    </div>
                    <div class="product-title">
                        <?php the_title(); ?>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>
