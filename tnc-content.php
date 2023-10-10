<div class="items-container">
    <?php 
    if(have_posts()):
        while (have_posts()): the_post();

        if(is_page_template('tnc.php')){ ?>
            <article class="item-container pages">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); 
        } 
        else{ ?>
        <article class="item-container pages side-choose">
            <div class='tnc-detail'>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>    
        <?php }

        if(is_page_template('tnc-detail.php')){ ?> 
        <div class='tnc-info'>
            <?php } ?>

        <nav class="site-nav children-links clearfix">
            <?php if($post -> post_parent){ ?>
                <span class="parent-link"><a href="<?php echo get_the_permalink(get_ancestor_id()); ?>">
                <?php echo get_the_title(get_ancestor_id()); ?></a></span> 
                
                <?php } ?>
                
                <ul>
                    <?php
                    $args = array(
                    'child_of' => get_ancestor_id(),
                    'title_li' => '',
                    );
                    ?>
                </ul>

                <?php wp_list_pages($args); ?> 
            </nav>
            <?php if(is_page_template('tnc-detail.php')){?> </div><?php } ?>
        </article>
        
            <?php
            endwhile;
            else:
                echo '<p>NOTHING HERE</p>';
        endif;
        ?>
</div>