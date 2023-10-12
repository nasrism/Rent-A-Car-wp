<?php
get_header();
?>
<div class="items-container">
    <div id="home">
        <div class="limited-range">
            <div class="logo"><img src="http://localhost/wordpress/wp-content/uploads/2023/10/rent-a-car-logo.png" alt=""></div>
            <h2>Easy, fast, reliable!</h2>
            <?php get_search_form(); ?>
        </div>
    </div>
    <h3>You might also like</h3>
    <div class="items-container sc-r-c">
    <?php $args = array(
            'post_type' => 'car',
            'posts_per_page' => 2,
            'orderby' => 'rand',
    );
    
    $query = new WP_Query($args); 
        if($query -> have_posts()):
        while ($query -> have_posts()): $query -> the_post();
        ?>

        <a href="<?php echo get_permalink() ?>" class="sc-r">
            <img class="thumbnail" src=<?php the_post_thumbnail();
            echo '<h2>';
                the_title();
            echo '</h2>';
            echo '<h5>';
            echo 'RM';
            the_field('rent-price-ph'); 
            echo '</h5>'; 
            echo '<p>';
            echo 'per hour';
            echo '</p>';
            ?>
        </a>
        <?php
        endwhile;
        wp_reset_query();
        else:
            echo '<p>NOTHING HERE</p>';
    endif;
    ?>
    </div>
</div>
<?php
get_footer();
?> 