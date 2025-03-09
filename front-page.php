<?php get_header()?>
<h1 class="bg-red-500">Lorem ipsum dolor sit amet.</h1>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <?php endwhile; endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer()?>