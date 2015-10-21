<?php
/*
Template Name: Search Page
*/
?>
<div class="search">
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<input type="text" name="s" id="s" placeholder="Search CASES" 
onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
	<input type="submit" value="search" class="searchbutton">
</form></div>