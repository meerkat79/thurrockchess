<!--This page is for single posts only-->

<?php get_header();  ?>

<?php get_sidebar(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>
        
        <?php comments_template('', true); ?>

<?php get_footer(); ?>