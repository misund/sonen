<?php get_header(); ?>

<?php $minspesiellegreie = get_post_format(); ?>

<section id="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

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
