<?php
/**
 * The sidebar for the about pages
 *
 * @package CASES Legit
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</div><!-- #secondary -->
