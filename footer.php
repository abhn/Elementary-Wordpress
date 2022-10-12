<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elementary
 */

?>

</div>

<footer>
  <hr class="stylish"/>
  <?php get_template_part( 'template-parts/nav' ); ?>
  <div>
    Theme: <a href="https://github.com/abhn/Elementary">Elementary</a>
    <br/>
    <a>Abhishek Nagekar</a> &copy;  <?php echo date("Y"); ?>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
