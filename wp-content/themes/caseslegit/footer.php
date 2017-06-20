<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CASES Legit
 */

?>

</div><!-- #content -->
<div class="footer">
	<div class="footitemsub">
            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
</div>

<div class="footmobi">

	<a href="https://www.cases.org/sitemap/">Mobile Sitemap</a>

	</div>

<div class="footright">

</div>

<br style="clear:both">
<div class="socialfoot">
<a href="https://twitter.com/casesnyc"><i class="fa fa-twitter-square"></i></a>
                    <a href="http://www.facebook.com/casesnyc"><i class="fa fa-facebook-square"></i></a>
                    <a href="http://www.linkedin.com/companies/659695"><i class="fa fa-linkedin-square"></i></a>
</div>
<div class="footadd">
    <div class="footadditem"><p>151 Lawrence Street<br>
            3rd Floor<br>
Brooklyn, NY 11201<br>
(212) 553-6300
        </p></div>
<div class="footadditem"><p>2090 Adam Clayton Powell, Jr. Boulevard<br>
        4th Floor<br>
New York, NY 10027<br>
(212) 553-6300
        </p></div>
</div>
<p>&copy; 2017 CASES</p>
</div>
</div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
