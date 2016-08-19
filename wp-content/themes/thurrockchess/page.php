<?php get_header();  ?>

<div class="col-md-12 check2 page-block">
    <?php while ( have_posts() ) : the_post(); ?>      
        <?php the_content(); ?>
    <?php endwhile; ?>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
