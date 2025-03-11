<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <h1><?php single_cat_title(); ?></h1> <!-- แสดงชื่อหมวดหมู่ -->
    <div class="category-description">
        <?php echo category_description(); ?> <!-- คำอธิบายของหมวดหมู่ -->
    </div>

    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p>Posted on <?php the_date(); ?> by <?php the_author(); ?></p> <!-- วันที่และผู้เขียน -->
        <div>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p>No posts found</p>
<?php endif; ?>

<h1>Archive</h1>

<?php get_footer(); ?>
