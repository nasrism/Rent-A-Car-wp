    </div>
</div>
<footer class='site-footer'>
    <div class="footer-container">
        <nav class="site-nav footer-right">
            
        <?php 
                $args = array(
                    'theme_location' => 'footr'
                ); ?>
                    <?php wp_nav_menu( $args ); ?>

        </nav>

        <nav class="site-nav footer-left">
            
        <?php 
                $args = array(
                    'theme_location' => 'footl'
                ); ?>
                    <?php wp_nav_menu( $args ); ?>
                    
        </nav>
    </div>

<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y') ?></p>
</footer>

<?php wp_footer(); ?>


</body>
</html>