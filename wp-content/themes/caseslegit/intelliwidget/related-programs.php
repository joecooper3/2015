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
<div class="relprog-title">Related Programs
    <div class="relprog-line"></div>
</div>
<?php
if ( $selected->have_posts() ) : while ( $selected->have_posts() ) : $selected->the_post();
?>
<?php $ohbrother = get_the_intelliwidget_title(); ?>
<a href="<?php the_intelliwidget_url() ?>"><div id="intelliwidget_<?php the_intelliwidget_ID(); ?>" class="intelliwidget4-container">
<h1 id="intelliwidget_title_<?php the_intelliwidget_ID(); ?>" class="intelliwidget4-title widget-title">
    <?php echo $ohbrother; ?>
  </h1>

  <?php if ( has_intelliwidget_image() ) : ?>
  <div class="intelliwidget-album-container-<?php echo $instance[ 'image_size' ];?> intelliwidget-align-<?php echo $instance[ 'imagealign' ]; ?>">
    <?php the_intelliwidget_image(false); ?>
      <div class="intelli-about-link"> Read more <i class='fa fa-arrow-right'></i></div>
  </div>
  <?php endif; ?>
  
  <div style="clear:both"></div>
    </div></a>
<?php endwhile; endif; ?>