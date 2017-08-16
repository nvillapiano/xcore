<!-- Template Part - Login content -->

<section class="login-content">
    <div class="login-content-wrapper">
        <h1 class="title">
           Welcome to XCore Technologies!
        </h1>
        <h3 class='subtitle'>
            You have been granted access to the following documents:
        </h3>

        <div class="login-message">
            <?php
            if ( is_user_logged_in() ) {
            } else {
                echo '<h3>Please ';
                echo '<a href="';
                echo wp_login_url('login-content');
                echo '" title="Login">Login</a>';
                echo ' to view content</h3>';
            }
            ?>
        </div>

        <div class="file-wrapper">
            <?php
                global $post;
                $args = array( 'posts_per_page' => -1, 'post_type' => 'user_content');
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <?php the_content(); ?>
                    <h1>
                        <a href="<?php the_field('media'); ?>">
                            <?php
                                $url = get_field('media');
                                $fileName = substr($url, strrpos($url, '/') + 1);
                                echo $fileName;
                            ?>
                        </a>
                    </h1>
            <?php endforeach;
            wp_reset_postdata();?>
        </div>
    </div>
</section>
