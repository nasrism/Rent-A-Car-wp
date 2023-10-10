<?php
get_header();
?>
<div class="items-container">
  
<?php 
get_search_form();
get_template_part('filter-function');?>
 
<div class="items-container sc-r-c">
   
    <?php 
    if(have_posts()):
        while (have_posts()): the_post();
        ?>
        <div class="sc-r">
            <img class="thumbnail" src=<?php the_post_thumbnail();
            echo '<h2>';
                echo '<a href="' . get_permalink() . '">';
                the_title();
                echo '</a>';
            echo '</h2>';
            the_content();?>
        </div>
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