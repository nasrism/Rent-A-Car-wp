<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="https://fontmeme.com/permalink/230928/a795cfdfc33aab8e26a5a3dd57b3f508.png">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/75b710a8ef.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="limited-range">
            <a href="<?php echo home_url(); ?>" class='logo'> <img src="http://localhost/wordpress/wp-content/uploads/2023/10/rent-a-car-logo.png" alt=""> </a>    
            <nav class="site-nav head-nav" data-nav="close">

                <div id="simulateDarkMode" class="container" data-theme="light">
                    <button type="button" class="btn-toggle" onclick="toggleDarkMode()">
                        <i  id="toggleDarkMode" class="fa-solid fa-sun"></i>
                    </button>
                </div>

                <div class="burger-nav">
                    <div class="top-sub-content">
                        <i class="fa-solid fa-bars" onclick='navbar()'></i>
                        <div class="top-sub-content-detail">
                            <?php wp_nav_menu( $args ); ?>
                        </div>
                    </div>
                </div>

                <div class="list-nav">
                    <?php 
                    $args = array(
                        'theme_location' => 'nav'
                    ); 
                    
                    wp_nav_menu( $args ); ?>
                    
                </div>
            </nav>
        </div>
    </header>
    
    <div class="limited-range">
