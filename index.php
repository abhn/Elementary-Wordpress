<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elementary
 */

get_header();
?>

<header>
  <h1>Abhishek Nagekar</h1>
</header>

<hr class="stylish"/>

<main class="home-main">


<section id="art">
  <details>
    <summary>
      <h3 class="home-page-heading">Doodles</h3>
    </summary>
    <div class="parent">
      <?php
        $pods = pods('doodle', array('orderby' => 'date DESC'));
        while($pods->fetch()) {
      ?>
        <div class="post-wrapper">
          <time class="post-date"><?php echo date('m/Y', strtotime($pods->field('date'))); ?></time>
          <a class="post-link" href="<?php echo $pods->field('permalink'); ?>">
            <?php echo $pods->field('title'); ?>
          </a>
        </div>
      <?php
        }
      ?>
    </div>
  </details>
</section>

<section id="posts">
  <details open>
    <summary>
      <h3 class="home-page-heading">Essays</h3>
    </summary>
    <div class="parent">


		<?php
			$query = array(
				'posts_per_page' => -1,
				'post_type' => 'post'
			);
			$posts = new WP_Query($query);

			if ($posts->have_posts()) :
				while ( $posts->have_posts() ) :
					$posts->the_post();
		      get_template_part('template-parts/post-listing-item');
				endwhile;
			endif;
		?>

    </div>
  </details>
</section>


</main>


<?php
get_footer();
