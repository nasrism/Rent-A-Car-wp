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
                <div class="content">
                        <img src="<?php the_field('owner_picture') ?>" alt="<?php the_field('car_owner') ?> picture" title="<?php echo the_field('car_owner') ?>">
                        <div>
                    <h4>
                        Hi! My name is <?php the_field('car_owner') ?> the owner of this Car!
                    </h4>
                <a href="https://wa.me/+6<?php the_field('contact_number')?>" target="_blank">Contact me to rent!</a>

                        </div>
                </div>
                <p class="owner-detail">
                    For RM<b><?php the_field('rent-price-ph')?></b> per hour, you get to rent this
                    <?php the_title(); ?> anywhere! The pickup point is <b><?php the_field('location') ?></b>.
                    You can <a href="https://wa.me/+6<?php the_field('contact_number')?>" target="_blank">Contact me</a> to ask any question.
                </p>
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