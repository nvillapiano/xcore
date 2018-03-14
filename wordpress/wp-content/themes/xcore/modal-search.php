<!-- Search -->

<section class="modal search">
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
            <span class="search-input">
                <img src="<?php echo get_template_directory_uri(); ?>/images/search-white.svg">
                <input type="text" id="searchInput" placeholder="Search here">
            </span>

            <ul id="searchUl">
                <li><a href="#">Lorem</a></li>
                <li><a href="#">ipsum</a></li>
                <li><a href="#">dolor</a></li>
                <li><a href="#">sit</a></li>
                <li><a href="#">amet</a></li>
                <li><a href="#">consectetur</a></li>
                <li><a href="<?php echo get_site_url(); ?>/solutions">Solutions</a></li>
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => -1, 'post_type' => 'industry');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                <?php endforeach;
                wp_reset_postdata();?>
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => -1, 'post_type' => 'services');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                <?php endforeach;
                wp_reset_postdata();?>
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => -1, 'post_type' => 'case_study');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                <?php endforeach;
                wp_reset_postdata();?>
            </ul>
        </div>
    </div>
</section>
