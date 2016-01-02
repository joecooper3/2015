<?php
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * about-side.php - Template for album covers
 *
 * This can be copied to a folder named 'intelliwidget' in your theme
 * to customize the output.
 *
 * @package IntelliWidget
 * @subpackage templates
 * @author Joe Cooper
 * @copyright CASES 
 * @access public
 */
?>
<?php
if ( $selected->have_posts() ) : while ( $selected->have_posts() ) : $selected->the_post();
?>
<h1 id="intelliwidget_title_<?php the_intelliwidget_ID(); ?>" class="intelliwidget-title widget-title">
    <a href="<?php get_the_intelliwidget_link() ?>"> Our <?php the_intelliwidget_title(); ?></a>
  </h1>
<div id="intelliwidget_<?php the_intelliwidget_ID(); ?>" class="intelliwidget-album-container">
  <?php if ( has_intelliwidget_image() ) : ?>
  <div class="intelliwidget-album-container-<?php echo $instance[ 'image_size' ];?> intelliwidget-align-<?php echo $instance[ 'imagealign' ]; ?>">
    <?php the_intelliwidget_image(); ?>
      <?php the_intelliwidget_excerpt(); ?>
      <div class="intelli-about-link"> <?php the_intelliwidget_link(0, "Read more <i class='fa fa-arrow-right'></i>"); ?></div>
  </div>
  <?php endif; ?>
  
  <div style="clear:both"></div>
</div>
<?php endwhile; endif; ?>