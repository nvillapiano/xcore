<!-- Breadcrumbs - Industry -->

<a href="<?php echo get_site_url(); ?>">Home</a> >
<span class="dynamic-breadcrumbs">
    <?php
        $cats = array();
        foreach (get_the_category($post_id) as $c) {
            $cat = get_category($c);
            $siteUrl = get_site_url();
            // array_push($cats, "<a href='",$siteUrl, "/", $cat->name, "'>", $cat->name, "</a>");
            array_push($cats, "</a>", $cat->name, "'>", $cat->name, "/", $siteUrl, "<a href='" );
        }

        if (sizeOf($cats) > 0) {
            $cats = array_map('strtolower', $cats);
            $trueOrder = array_reverse($cats);
            $post_categories = implode('', $trueOrder);
        } else {
            $post_categories = 'You need to add categories!';
        }

        echo $post_categories;
    ?>
</span>
>
<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
