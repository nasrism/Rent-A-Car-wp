
 
<div class="items-container">
   
    <?php 
    if(have_posts()):
        while (have_posts()): the_post();
        if (is_page('login') || is_page('signup')) {
        echo '<article class="item-container suli">'; 
        }
        else if(is_page_template('index.php')){
        echo '<article class="item-container">'; 
        }
        else{
            echo '';
        }
        ?>
        <h2>
            <?php
        if (!is_page(array('login', 'signup','')) && !is_page()) {
            echo '<a href="' . get_permalink() . '">';
            the_title();
            echo '</a>';  
        }
        else {
            the_title();
        }
        ?>
        </h2>
        <?php the_content();?>  
        </article>
        
        <?php
        endwhile;
        else:
            echo '<p>NOTHING HERE</p>';
    endif;
    ?>
</div>