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
<ul class="relprog-list">
<?php
if ( $selected->have_posts() ) : while ( $selected->have_posts() ) : $selected->the_post();
?>
<?php $ohbrother = get_the_intelliwidget_title(); ?>
    <li><a href="<?php the_intelliwidget_url() ?>">
    <?php echo $ohbrother; ?></a>
  </li>
<?php endwhile; endif; ?>
</ul>