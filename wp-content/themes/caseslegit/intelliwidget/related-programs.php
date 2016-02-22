<?php
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * related-programs.php - Template for related programs
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
<div class="relprog-title">Related Programs</div>
<?php
if ( $selected->have_posts() ) : while ( $selected->have_posts() ) : $selected->the_post();
?>
<?php $ohbrother = get_the_intelliwidget_title(); ?>
<div id="intelliwidget_<?php the_intelliwidget_ID(); ?>" class="intelliwidget4-container">
<h1 id="intelliwidget_title_<?php the_intelliwidget_ID(); ?>" class="intelliwidget4-title widget-title">
    <?php the_intelliwidget_link(NULL, "$ohbrother", NULL); ?>
  </h1>

  <?php if ( has_intelliwidget_image() ) : ?>
  <div class="intelliwidget-album-container-<?php echo $instance[ 'image_size' ];?> intelliwidget-align-<?php echo $instance[ 'imagealign' ]; ?>">
    <?php the_intelliwidget_image(); ?>
      <div class="intelli-about-link"> <?php the_intelliwidget_link(0, "Read more <i class='fa fa-arrow-right'></i>"); ?></div>
  </div>
  <?php endif; ?>
  
  <div style="clear:both"></div>
</div>
<?php endwhile; endif; ?>