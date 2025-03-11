<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="flex justify-between items-center px-20 py-4 bg-[#333] text-white">
            <?php if(has_custom_logo()) {

                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id );

            }?>

            <img src="<?php echo $logo[0] ?>" alt="site logo" class="w-10">
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