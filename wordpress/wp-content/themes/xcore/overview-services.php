<!-- Template Part - Overview: Services -->

<section class="overview">
    <div class="overview-wrapper">
        <div class="breadcrumbs">
            <?php get_template_part('breadcrumbs','top'); ?>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2>
                <?php echo the_title(); ?>
            </h2>
            <h4>
                <!-- <?php the_content(); ?> -->
                <?php echo wp_strip_all_tags( get_the_content() ); ?>
            </h4>
        <?php endwhile; endif;?>

        <div class="sub-sections">
            <?php query_posts( array ('post_type' => 'services', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="sub-section">
                    <div class="image" style="background-image: url('<?php the_field('thumbnail'); ?>')">
                        &nbsp;
                    </div>
                    <div class="meta">
                        <a href="<?php the_permalink(); ?>">
                            <h6>
                                <?php the_title(); ?>
                            </h6>
                            <div class="caret">
                                <svg id="caret" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.75 20.41">
                                  <title>caret</title>
                                  <g id="Homepage">
                                    <g id="Business-Solutions">
                                      <g id="Group">
                                        <g id="Group-13">
                                          <g id="Group-12">
                                            <g id="Group-7">
                                              <g id="Group-2">
                                                <polygon id="Page-1" class="cls-1" points="2.6 0 0 2.55 7.65 10.2 0 17.86 2.6 20.41 12.76 10.2 2.6 0"/>
                                              </g>
                                            </g>
                                          </g>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>
