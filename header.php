<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="flex justify-between items-center">
            <h1>HEADER LOGO</h1>
            <div class="flex">

                <?php wp_nav_menu(
                    
                    array(
                        'theme_location' => 'top',
                        // 'menu_class' => 'primary'
                        )
                        
                    ); ?>
            </div>
        </nav>
    </header>