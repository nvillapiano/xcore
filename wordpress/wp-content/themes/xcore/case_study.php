<!-- Template Part - Case study -->

<section class="case-study">
    <div class="hero">
        <div class="hero-wrapper">
            <div class="copy">
                <div class="breadcrumbs">
                    <?php get_template_part('breadcrumbs','use_case'); ?>
                </div>
                <h2>
                    <?php the_title(); ?>
                </h2>

                <h4>
                    <?php the_field('summary'); ?>
                </h4>

                <section class="case-study--links">
                    <h3>
                        <a href="#what-is-it">What is it?</a>
                    </h3>
                    <h3>
                        <a href="#usage-today">Usage Today</a>
                    </h3>
                    <h3>
                        <a href="#adapting-technology-to-the-card">Adapting technology to the card</a>
                    </h3>
                    <h3>
                        <a href="#xcores-process">XCore's process</a>
                    </h3>
                    <h3>
                        <a href="#contact-us">CONTACT US</a>
                    </h3>
                </section>
            </div>
            <div class="image" style="background-image: url('<?php the_field('image'); ?>');">
            </div>
        </div>
    </div>
    <section class="use-cases">
        <article class="use-case" id="what-is-it">
            <div class="use-case--wrapper">
                <div class="copy">
                    <h2>
                        What is it?
                    </h2>
                    <h4>
                        <?php the_field('what_is_it'); ?>
                    </h4>
                </div>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.svg">
                </div>
            </div>
        </article>
        <article class="use-case" id="usage-today">
            <div class="use-case--wrapper">
                <div class="copy">
                    <h2>
                        Usage today
                    </h2>
                    <h4>
                        <?php the_field('usage_today'); ?>
                    </h4>
                </div>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon2.svg">
                </div>
            </div>
        </article>
        <article class="use-case" id="adapting-technology-to-the-card">
            <div class="use-case--wrapper">
                <div class="copy">
                    <h2>
                        Adapting technology to the card
                    </h2>
                    <h4>
                        <?php the_field('adapting_technology_to_the_card'); ?>
                    </h4>
                </div>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon3.svg">
                </div>
            </div>
        </article>
        <article class="use-case" id="xcores-process">
            <div class="use-case--wrapper">
                <div class="copy">
                    <h2>
                        XCore's process
                    </h2>
                    <h4>
                        <?php the_field('xcores_process'); ?>
                    </h4>
                </div>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon4.svg">
                </div>
            </div>
        </article>
        <article class="use-case is-contact" id="contact-us">
            <div class="use-case--wrapper">
                <div class="copy">
                    <h2>
                        Contact Us
                    </h2>
                    <h2>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed tristique justo. Nam in felis quis odio tempor ullamcorper at sed quam. Aliquam erat volutpat. Quisque non ultricies metus.
                    </h2>
                    <div class="button">
                        Contact
                    </div>
                </div>
            </div>
        </article>
    </section>
</section>
