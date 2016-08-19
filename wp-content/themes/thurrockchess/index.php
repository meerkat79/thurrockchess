<?php get_header();  ?>

<div class="col-md-12 check1 page-block">
	    <?php while ( have_posts() ) : the_post(); ?>
	    <div class="each-post"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <p>
	        By <?php echo get_the_author_link(); ?></p>
	        <?php the_content(); ?></div>

    <?php endwhile; ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>