<?php


/*
Template Name: Login
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
        <div class="show-pass">
            <input type="checkbox" name="" id="show-password" onclick="toggle()">
            <label for="show-password">show-password</label>
        </div>
        <div class="enter-button">
            <a href="http://localhost/wordpress/signup/">Don't have account?</a>
            <a href="" class="enter"><b>Log in</b></a>
        </div>
        </article>
        
        <?php
        endwhile;
        else:
            echo '<p>NOTHING HERE</p>';
    endif;
    ?>
</div>
<script>
    
  const password = document.getElementById('password');
        toggle=()=> password.type==="password"?password.type="text":password.type="password";
</script>
<?php
get_footer();
?>

