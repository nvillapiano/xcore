<!-- Template Part - Company -->

<section class="case-study company">
    <div class="hero">
        <div class="hero-wrapper">
            <div class="copy">
                <div class="breadcrumbs">
                    <?php get_template_part('breadcrumbs','top'); ?>
                </div>

                <?php query_posts( array ('post_type' => 'company_content', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
                <?php while ( have_posts() ) : the_post(); ?>

                <?php endwhile; ?>


                <h2>
                    <?php the_title(''); ?>
                </h2>

                <h4>
                    <?php the_field('summary'); ?>
                </h4>

                <section class="case-study--links">
                    <h3>
                        <a href="#about">About</a>
                    </h3>
                    <h3>
                        <a href="#management-team">Management Team</a>
                    </h3>
                    <h3>
                        <a href="faqs">FAQs</a>
                    </h3>
                    <h3>
                        <a href="#">Media/Blog</a>
                    </h3>
                </section>
            </div>
            <div class="image" style="background-image: url('<?php the_field('image'); ?>');">
            </div>
        </div>
    </div>
    <section class="use-cases">
        <article class="use-case" id="about">
            <div class="use-case--wrapper">
                <div class="copy">
                    <h2>
                        About XCore
                    </h2>
                    <h4>
                        <?php the_field('about_summary'); ?>
                    </h4>
                </div>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.svg">
                </div>
            </div>
        </article>
        <article class="use-case" id="management-team">
            <div class="use-case--wrapper">
                <div class="copy">
                    <h2>
                        Management Team
                    </h2>
                    <h4>
                        <?php the_field('management_summary'); ?>
                    </h4>
                </div>
            </div>
            <div class="team-wrapper">
                <?php query_posts( array ('post_type' => 'team_member', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php $name = get_the_title(); ?>
                    <?php $slug = str_replace( " ", "", $name ); ?>
                    <?php $slugLower = strtolower($slug) ?>
                    <article class="sub-section team-member-trigger" id="<?php echo $slugLower ?>">
                        <div class="image" style="background-image: url('<?php the_field('photo') ?>')">
                            &nbsp;
                        </div>
                        <div class="meta">
                            <a>
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <p>
                                    <?php the_field('job_title'); ?>
                                </p>
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
                                                    <polygon id="Page-1" class="cls-1" points="2.6 0 0 2.55 7.65 10.2 0 17.86 2.6 20.41 12.76 10.2 2.6 0"></polygon>
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
        </article>
    </section>
</section>

<!-- Modals -->
<?php query_posts( array ('post_type' => 'team_member', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php $name = get_the_title(); ?>
    <?php $slug = str_replace( " ", "", $name ); ?>
    <?php $slugLower = strtolower($slug) ?>

    <section class="modal team-member <?php echo $slugLower ?>">
        <div class="modal-wrapper">
            <div class="x-close">
                <svg id="x" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.26 59.78">
                  <title>x</title>
                  <g id="Homepage">
                    <g id="Search-Lightbox-Copy">
                      <polygon id="Page-1" class="cls-1" points="56.42 0 30.13 26.05 3.84 0 0 3.88 26.25 29.89 0 55.9 3.84 59.78 30.13 33.73 56.42 59.78 60.26 55.9 34.01 29.89 60.26 3.88 56.42 0"/>
                    </g>
                  </g>
                </svg>
            </div>
            <div class="content">
                <div class="card">
                    <div class="image" style="background-image: url('<?php the_field('photo') ?>')">
                        &nbsp;
                    </div>
                    <div class="meta">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <p>
                            <?php the_field('job_title'); ?>
                        </p>
                        <div class="links">
                            <a class="email" href="mailto:<?php the_field('email'); ?>"><?php the_field('email') ?></a>
                            <a class="phone" href="tel:<?php the_field('phone'); ?>"><?php the_field('phone') ?></a>
                        </div>
                    </div>
                </div>
                <div class="copy">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <h3>
                        <?php the_field('job_title'); ?>
                    </h3>
                    <h4>
                        <?php the_field('summary'); ?>
                    </h4>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
