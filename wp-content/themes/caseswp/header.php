<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<title>CASES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">//empty script, I guess this is supposed to fix iPhone rendering bugs or whatever</script>
<script type="text/javascript" src="http://www.casesnyc.org/test/jquery.js"></script>
<script src="http://www.casesnyc.org/test/jquery.bxslider.min.js"></script>
<script src="http://www.casesnyc.org/test/js/jquery.smartmenus.js" type="text/javascript"></script>
<script src="http://www.casesnyc.org/test/js/jquery.expander.min.js" type="text/javascript"></script>
<script src="http://www.casesnyc.org/test/js/customexp.js" type="text/javascript"></script>
	<link rel="stylesheet" href="http://www.casesnyc.org/test/style.css" type="text/css" />
	<link rel="stylesheet" href="http://www.casesnyc.org/test/stylesheets/skeleton.css">
	<link rel="stylesheet" href="http://www.casesnyc.org/test/stylesheets/layout.css">
	<link href='http://www.casesnyc.org/test/stylesheets/sm-core-css.css' rel='stylesheet' type='text/css' />
	<link href='http://www.casesnyc.org/test/stylesheets/sm-simple/sm-simple.css' rel='stylesheet' type='text/css' />
	
	<meta name="viewport" content="width=device-width">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

<div class="container">
<div class="one-third column"><div id="header">
<a href="http://www.casesnyc.org/test/"><img src="http://www.casesnyc.org/test/newlogo.png" class="scale-with-grid">
</a></div></div>
<div class="two-thirds column">


<span id="menu-button"></span>
<ul id="main-menu" class="sm sm-simple">
<li>
	<a href="#">About</a>
	<ul>
		<li><a href="http://www.casesnyc.org/test/about/mission/">Mission</a></li>
		<li><a href="http://www.casesnyc.org/test/about/history/">History</a></li>
		<li><a href="http://www.casesnyc.org/test/about/board-of-trustees/">Trustees</a></li>
		<li><a href="http://www.casesnyc.org/test/about/executive-team-2/">Executive Team</a></li>
		<li><a href="http://www.casesnyc.org/test/about/awards/">Awards</a></li>
		<li><a href="http://www.casesnyc.org/test/about/annual-report/">Annual Report</a></li>
		<li><a href="http://www.casesnyc.org/test/about/financials/">Financials</a></li>
	</ul>
</li>
<li><a href="#">Programs</a>
	<ul><li><a href="#">Youth & Young Adult</a>
		<ul>
		<li><a href="http://www.casesnyc.org/test/programs/court-employment-project/">Court Employment Project</a></li>
		<li><a href="http://www.casesnyc.org/test/programs/choices-atd/">Choices Alternative to Detention</a></li>
		<li><a href="http://www.casesnyc.org/test/programs/queens-justice-corps/">Queens Justice Corps</a></li>
		<li><a href="http://www.casesnyc.org/test/programs/young-adult-justice-scholars/">Young Adult Justice 
		Scholars</a></li>
		</ul></li>
	<li><a href="#">Adult Behavioral</a>
		<ul>
		<li><a href="http://www.casesnyc.org/test/programs/nathaniel-act/">Nathaniel ACT</a></li>
		<li><a href="http://www.casesnyc.org/test/programs/manhattan-act/">Manhattan ACT</a></li>
		<li><a href="#">Manhattan START</a></li>
		<li><a href="#">Manhattan CIRT</a></li>
		<li><a href="#">Brooklyn CIRT</a></li>
		</ul></li>
	<li><a href="#">The Nathaniel Center</a></li>
	<li><a href="http://www.casesnyc.org/test/programs/staten-island-community-service-project/">Staten Island Community Service Project</a></li>
	<li><a href="#">Featured Services</a>
		<ul>
		<li><a href="http://www.casesnyc.org/test/programs/career-exploration/">Career Exploration</a></li>
		<li><a href="#">Next Steps</a></li>
		<li><a href="#">Summer Youth Employment Program</a></li>
		<li><a href="#">Supportive Housing</a></li>
		<li><a href="#">Women's Diversion Program</a></li>
		</ul></li>
	</ul></li>
<li><a href="#">Resources</a>
<ul><li><a href="#">FAQs</a>
	<ul>
	<li><a href="http://www.casesnyc.org/test/faqs-for-prosecutors/">Prosecuters</a></li>
	<li><a href="#">Defense Attorneys</a></li>
	<li><a href="#">Employers</a></li>
	</ul></li>
<li><a href="#">Technical Assistance</a></li>
<li><a href="#">News and Media</a></li>
<li><a href="#">Coalitions</a></li>

</ul>
<li><a href="#">Contact</a>
	<ul>
	<li><a href="#">Contact Us</a></li>
	<li><a href="http://www.casesnyc.org/test/contact/staff-directory/">Staff Directory</a></li>
	<li><a href="#">Jobs</a></li>
	<li><a href="#">Ways to Help</a>
	<ul>
	<li><a href="#">Donate</a></li>
	<li><a href="#">Hire a CASES Participant</a></li>
	<li><a href="#">Volunteer</a></li>
	<li><a href="#">Join a Community Advisory Board</a></li>
	</ul>
	</li>
	</ul>
	</li>
<li><?php get_search_form(); ?></li>
</ul> 


<script type="text/javascript">$(function() {
  $('#menu-button').click(function() {
    var $this = $(this),
        $menu = $('#main-menu');
    if (!$this.hasClass('collapsed')) {
      $menu.addClass('collapsed');
      $this.addClass('collapsed');
    } else {
      $menu.removeClass('collapsed');
      $this.removeClass('collapsed');
    }
    return false;
  }).click();
});</script>

<script>$(function() {
  $('#main-menu').smartmenus();
});</script>


</div>

<div class="row"></div>