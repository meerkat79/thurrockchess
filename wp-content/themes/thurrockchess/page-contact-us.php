<?php get_header();  ?>

<div class="col-md-12 check4 contact-block">
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>
