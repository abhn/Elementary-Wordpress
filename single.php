<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package elementary
 */

get_header();
?>


<header>
	<h1><?php the_title(); ?></h1>
	<header class="title-tags">
		<time><?php the_time('j F, Y. \I\t \w\a\s \a l'); ?></time>
		<div class="tags-container">
			Posted under <span>
				<?php
				$post_tags = get_the_tags();
				if ( $post_tags ) {
					foreach($post_tags as $tag) {
				?>
						<a class="tags" href="/tags#<?php echo $tag->name; ?>"><?php echo $tag->name; ?></a>
				<?php
					}
				}
				?>
			</span>
			&nbsp;
		</div>
	</header>
</header>

<hr class="stylish" />

<main role="main">

	<?php
	while ( have_posts() ) :
		the_post();

		$previous_post = get_previous_post();
		$next_post = get_next_post();

		?>

		<article>
			<section class="content">
				<?php the_content(); ?>
			</section>

			<hr class="stylish"/>

			<?php get_template_part( 'template-parts/featured' ); ?>

			<hr class="stylish"/>

			<section class="pagination">
				<?php if($previous_post): ?>

					<a class="prev" href="<?php echo get_permalink($previous_post); ?>">&laquo; <?php echo get_the_title($previous_post); ?></a>

					<?php 
				endif; 
				if($next_post): 
					?>

					<a class="next" href="<?php echo get_permalink($next_post); ?>"> <?php echo get_the_title($next_post); ?> &raquo;</a>

					<?php
				endif;
				?>
			</section>

		</article>

	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
