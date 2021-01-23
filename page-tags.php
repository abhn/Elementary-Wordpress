<?php /* Template Name: tags */ ?>

<?php 
get_header(); 
?>

<header>
  <h1><?php the_title(); ?>
</header>

<hr class="stylish"/>

<main role="main">

  <article>
    <?php the_content(); ?>
  </article>

  <ul>
    <?php 
      $tags = get_tags(array(
        'hide_empty' => true
      ));
      foreach ($tags as $tag) {
        ?>
          <li>
            <a href="#<?php echo $tag->name; ?>">
              <?php echo $tag->name; ?> <span><?php echo $tag->count; ?></span>
            </a>
          </li>
        <?php
      }
    ?>
  </ul>

  <?php
    foreach ($tags as $tag) {
  ?>
      <h2 class="nice-title" id="<?php echo $tag->name; ?>"><?php echo $tag->name; ?></h2>
      <ul>
      <?php
        $query = new WP_Query('tag='.$tag->name);
        if($query->have_posts()) {
          while($query->have_posts()) {
            $query->the_post();
      ?>
        <li><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
      <?php
          }
        }
      ?>
      </ul>
      <?php
    }
  ?>
</main>

<?php
get_footer();