<?php get_header();  ?>

<div class="row page-block">

<?php get_sidebar(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>
        
        <?php comments_template('', true); ?>
</div>
<?php get_footer(); ?>