<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-info">
            <?php
            /**
             * Fires before the site info in the footer.
             */
            do_action('your_theme_before_site_info');
            ?>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                <?php bloginfo('name'); ?>
            </a>

            <a href="<?php echo esc_url(__('https://wordpress.org/', 'your-theme')); ?>" class="imprint">
                <?php printf(__('Proudly powered by %s', 'your-theme'), 'WordPress'); ?>
            </a>

            <?php
            /**
             * Fires after the site info in the footer.
             */
            do_action('your_theme_after_site_info');
            ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
