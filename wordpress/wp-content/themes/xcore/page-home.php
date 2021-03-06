<?php
/*
Template Name: Case Study
*/
?>
<?php get_header(); ?>
<div class="page-wrapper business-solutions">
    <div class="fold">
        <div class="slider">

        <?php echo do_shortcode('[bxslider id="home2"]') ?>

        <?php
        // TO SHOW THE PAGE CONTENTS
        while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <?php the_content(); ?> <!-- Page Content -->
        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        </div>

        <div class="content">
            <div class="home-nav">
                <div class="row">
                    <a href="solutions" class="col">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/handshake.svg">
                        </div>
                        <div class="copy">
                            <div class="title">
                                Solutions
                            </div>
                            <p>
                                <?php the_field('solutions'); ?>
                            </p>
                        </div>
                    </a>
                    <a href="services" class="col">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/gears.svg">
                        </div>
                        <div class="copy">
                            <div class="title">
                                Services
                            </div>
                            <p>
                                <?php the_field('services'); ?>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

