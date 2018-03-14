<!-- Template Part - Overview -->

<section class="overview">
    <div class="overview-wrapper">
        <div class="breadcrumbs">
            <?php get_template_part('breadcrumbs','industry'); ?>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2>
                <?php echo the_title(); ?>
            </h2>
            <h4>
                <?php the_field('summary'); ?>
            </h4>
            <section class="overview--use-cases">
                <h3>
                    <a href="#useCases"><?php echo the_title(); ?> Use Cases</a>
                </h3>
            </section>
            <section id="useCases">
                <?php
                    $posts = get_field('use_cases');
                    if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <article class="sub-section">
                                <div class="copy">
                                    <h5>
                                        <?php the_title(); ?>
                                    </h5>
                                    <p>
                                        <?php the_field('summary'); ?>
                                    </p>
                                </div>
                                <div class="meta">
                                    <a href="<?php the_permalink(); ?>">
                                        <h6>
                                            Learn More
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
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </section>
        <?php endwhile; endif;?>
    </div>
</section>
