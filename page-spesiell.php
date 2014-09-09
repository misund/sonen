<?php
/**
 * Template Name: Spesiell mal
 */
?>

<?php get_header(); ?>


<section id="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
	<h1><?php the_title();  ?></h1>

	<div class="entry-content">
<?php the_content(); ?>
	</div>

	</article>
<?php endwhile; endif; ?>


</section>


<?php get_sidebar(); ?>


<?php get_footer(); ?>

</body>
</html>
