<?php
/**
 * Template part for displaying one link for post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elementary
 */

?>

<div class="post-wrapper">
  <time class="post-date"><?php the_time('m/Y'); ?></time>
  <a class="post-link" href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
  </a>
</div>