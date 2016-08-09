<!--This is a page for single pages that are created inside of the CMS-->

<?php get_header();  ?>

<div class="row page-block">
    <?php while ( have_posts() ) : the_post(); ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>        
        <?php the_content(); ?>
    <?php endwhile; ?>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>