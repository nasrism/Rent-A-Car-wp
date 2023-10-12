<?php

/*
Template Name: Review
*/
get_header();?>

 
<div class="items-container">
   
    <?php 
    if(have_posts()):
        while (have_posts()): the_post();?>
        <h2>
            <?php
            the_title();
// Get the current page ID
$current_page_id = get_the_ID();

// Query child pages of the current page
$child_pages = new WP_Query(array(
    'post_type'      => 'page',  // Change to 'post' if you want to display child posts
    'post_parent'    => $current_page_id,
    'posts_per_page' => -1,  // Retrieve all child pages
    'orderby'          => 'rand'
));

// Loop through child pages
?>
<div class="review-container">
<?php
if ($child_pages->have_posts()) {
    while ($child_pages->have_posts()) {
        $child_pages->the_post();
        ?>

        <div class="review">
        <div class="review background"></div>
        <h4><?php the_title(); ?></h4>
        <?php if (has_post_thumbnail()) : ?>
        <img src=<?php the_post_thumbnail() ?> alt="">
        <?php endif ?>
        <p><?php the_content() ?></p>
        </div>
        <?php
    }
    wp_reset_postdata(); // Restore the global post data
}
        ?>
        </div>
        </h2> 
        </article>
        
        <?php
        endwhile;
        else:
            echo '<p>NOTHING HERE</p>';
    endif;
echo '</div>';
get_footer();
?> 