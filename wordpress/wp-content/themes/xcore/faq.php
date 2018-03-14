<!-- Template Part - FAQ -->

<section class="case-study faq" id="returntotop">
    <div class="hero">
        <div class="hero-wrapper">
            <div class="copy">
                <div class="breadcrumbs">
                    <?php get_template_part('breadcrumbs','faq'); ?>
                </div>

                <h2>
                    <?php the_title(''); ?>
                </h2>

                <h4>
                    <?php
                        $page = get_page_by_title( 'faqs' );
                        $content = apply_filters('get_the_content', $page->post_content);
                        echo $content;
                    ?>
                </h4>

                <section class="case-study--links">
                    <?php query_posts( array ('post_type' => 'faq', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php $name = get_the_title(); ?>
                        <?php $slug = str_replace( " ", "", $name ); ?>
                        <?php $trimIt = trim($slug, "?"); ?>
                        <?php $slugLower = strtolower($trimIt) ?>
                        <h3>
                            <a href="#<?php echo $slugLower ?>"><?php the_title(); ?></a>
                        </h3>
                    <?php endwhile; ?>
                </section>
            </div>
            <div class="image" style="background-image: url('<?php the_field('image'); ?>');">
            </div>
        </div>
    </div>
    <section class="use-cases">
        <?php query_posts( array ('post_type' => 'faq', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php $name = get_the_title(); ?>
            <?php $slug = str_replace( " ", "", $name ); ?>
            <?php $trimIt = trim($slug, "?"); ?>
            <?php $slugLower = strtolower($trimIt) ?>


            <article class="use-case" id="<?php echo $slugLower ?>">
                <div class="use-case--wrapper">
                    <div class="copy">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <h4>
                            <?php the_field('answer'); ?>
                        </h4>
                        <a href="#returntotop">
                            <h4>
                                Return to top
                            </h4>
                        </a>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    </section>
</section>

