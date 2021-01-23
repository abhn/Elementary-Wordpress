<?php
/**
 * Template part for displaying one link for post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elementary
 */

?>

<?php
  $post_tags = get_the_tags();
?>

<div class="post-wrapper"
    data-tags="<?php
        $post_tags = get_the_tags();
        if ($post_tags) {
          $count = count($post_tags);
          foreach($post_tags as $tag) {
            echo $tag->name;
            if(--$count > 0) {
              echo ',';
            }
          }
        }
      ?>">
  <time class="post-date"><?php the_time('m/Y'); ?></time>
  <a class="post-link" href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
  </a>
</div>