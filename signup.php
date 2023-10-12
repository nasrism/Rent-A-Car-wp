<?php


/*
Template Name: Signup
*/

get_header();


 
echo '<div class="items-container">';
   
    if(have_posts()):
        while (have_posts()): the_post();
        echo '<article class="item-container suli">'; 
        echo '<h2>';
            the_title();
        echo '</h2>';
        ?>  
        <input type="email" name="email" id="" placeholder="Email" class='fill-theme'>
        <input type="password" name="password" id="password" placeholder="Password" class='fill-theme'>
        <input type="password" name="con-password" id="con-password" placeholder="Confirm Password" class='fill-theme'>
        
        <div class="enter-button">
            <a href="http://localhost/wordpress/login/">Already have account?</a>
            <a href="" class="enter"><b>Signup</b></a>
        </div>
        </article>
        
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

