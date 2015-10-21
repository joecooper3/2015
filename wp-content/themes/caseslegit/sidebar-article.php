<?php
/**
 * The sidebar for articles
 *
 * @package CASES Legit
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #secondary -->
