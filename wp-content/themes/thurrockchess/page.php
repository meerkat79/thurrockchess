<!--This is a page for single pages that are created inside of the CMS-->

<?php get_header();  ?>

<div class="page-block">
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>        
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>