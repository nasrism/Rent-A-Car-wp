<?php
get_header();
?>
<div class="items-container">
  
<?php 
get_search_form();?>
 
<div class="items-container">
   
    <?php 
    if(have_posts()):
        while (have_posts()): the_post();
        ?>
        <div class="si-r">
            <img class="thumbnail" src=<?php the_post_thumbnail();?>
            <div class="si-d">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <?php the_content(); ?>
            </div>
           
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