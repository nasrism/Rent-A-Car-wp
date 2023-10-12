<?php
get_header();
?>
<div class="items-container">
  
<?php 
get_search_form();
get_template_part('filter-function');?>
 
<div class="items-container sc-r-c">
   
    <?php 
        $location = '';
        $rent_price = '';
        $type = '';
        $brand = '';

        if(isset($_GET['rent-price']) && !empty($_GET['rent-price'])){
            $rent_price = $_GET['rent-price'];
        }
        
        if(isset($_GET['type']) && !empty($_GET['type'])){
            $type = $_GET['type'];
        }
        
        if(isset($_GET['brand']) && !empty($_GET['brand'])){
            $brand = $_GET['brand'];
        }
        if(isset($_GET['s']) && !empty($_GET['s'])){
            $location = $_GET['s'];
        }
        

        $args = array(
            'post_type' => 'car',
            'post_per_page' => -1,
            'orderby' => 'rand',
            'meta_query' => array(
                array(
                    'key' => 'brand',
                    'value' => $brand,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'type',
                    'value' => $type,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'rent-price',
                    'value' => $rent_price,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'location',
                    'value' => $location,
                    'compare' => 'LIKE',
                ),

            )
            ); 

        $query = new WP_Query($args); 
        if($query -> have_posts()):
        while ($query -> have_posts()): $query -> the_post();
        
        // if(have_posts()):
        // while (have_posts()): the_post();

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
        else:
            echo '<p>NOTHING HERE</p>';
    endif;
    ?>
</div>
<?php
get_footer();
?> 