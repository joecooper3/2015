<?php
/*
Template Name: Executive Team Page
*/
get_header(); ?>

<div class="sixteen columns">
<div class="pagetitle">About</div>
<div class="pagetitle-sub"><?php the_title(); ?> </div>
<?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' );
?>
</div>

<div class="row"></div>

<div class="one column"></div>

<div class="thirteen columns">
<div class="general">
<img src="http://www.casesnyc.org/test/images/joelsm.jpg" class="eteam">
<p class="emphasis">Joel Copperman, Chief Executive Officer/President</p>
<p>Joel Copperman joined 
CASES in 1990 as the organization's first Executive Director. Prior to joining CASES, Mr. Copperman held several 
positions in New York City Government during the administration of Ed Koch. Mr. Copperman was in the Mayor's Office of 
Intergovernmental Relations serving as a legislative representative in Albany, was Deputy Director of the Mayor's Office 
of Operations, and was the first Director of the Mayor's Office of Contracts.</p>

<span class="expander">
<p>Currently, Mr. Copperman is Chair of the Board of Directors of the Human Services Council, a 
coalition of over 160 New York City organizations that advocates for the needs of the human services sector; Chair of the 
Board of Directors of Youth Represent, an organization that provides juvenile defender representation and addresses other 
legal issues that may stem from a young person's involvement in the criminal justice system; and a member of the New 
York City Discharge Planning Collaboration, a coalition of city agencies, non-profits, research institutions, and experts 
that works to transform outcomes for people in jails and shelters. In August 2011, Mr. Copperman was selected by the New 
York State Office of Children and Family Services to serve on the Advisory Board for its new Brooklyn for Brooklyn 
Initiative (B4B), a community-based, therapeutic model for serving youth in state custody.</p>

<p>Mr. Copperman holds a B.A. from Bradley University, a J.D. from Boston University School of Law, and an M.P.P. from 
the John F. Kennedy School of Government at Harvard University.</p></span>

<div class="divider"></div>

<img src="http://www.casesnyc.org/test/images/rebeccasm.jpg" class="eteam">
<p class="emphasis">Rebecca Asbury, Chief Financial & Administrative Officer</p>
<p>Rebecca Asbury joined CASES in 1996. She 
oversees the organization's $10 million annual budget and supervises the departments of Finance, Human Resources, 
Information Services, Strategic Planning and Analysis, Development, and the Physical Plant. Prior to joining CASES, 
Ms. Asbury was the Assistant Vice President for Finance and Administration at the Bank Street College of Education in 
New York City. She has taught as an Adjunct Professor at New York University's Robert F. Wagner Graduate School of 
Public Service. Ms. Asbury holds a B.A. from Mount Holyoke College and an M.P.A. from Baruch College.
</p>

<div class="divider"></div>

<img src="http://www.casesnyc.org/test/images/jamaalsm.jpg" class="eteam">
<p class="emphasis">Jamaal Thomas, General Counsel/Secretary</p>
<p>
Jamaal Thomas first joined CASES in 2001 as a Court Representative for the Court Employment Project in the Bronx and 
New York Counties before departing to attend law school in 2003. He returned to CASES in 2007 and was promoted to his 
current position in 2010. As General Counsel, Mr. Thomas is responsible for providing legal advice and representation to 
the agency in all areas. Mr. Thomas holds a B.A. from SUNY Purchase and a J.D. from St. John's University School of Law. 
He is admitted to practice in the State of New York.
</p>
<div class="row">
</div>

<div class="divider"></div>

<img src="http://www.casesnyc.org/test/images/annmariesm.jpg" class="eteam">
<p class="emphasis">Ann-Marie Louison, Director of Adult Behavioral Health Programs</p>
<p>Ann-Marie Louison joined CASES in 1999 and 
is the co-founder of the Nathaniel Project. The Nathaniel Project was the first alternative-to-incarceration program in 
Manhattan Supreme Court for adults with severe and persistent mental illness convicted of felony offenses. The Nathaniel 
Project was selected from a nationwide pool of applicants as the sole award winner of the 2002 Thomas M. Wernert Award 
for Innovations in Community Behavioral Healthcare. In June 2003, the Project was licensed by the New York State Office 
of Mental Health to provide evidenced-based Assertive Community Treatment (ACT) services.</p>

<span class="expander">
<p>
Ms. Louison became Director of Mental Health Programs in 2002, overseeing Nathaniel ACT and subsequently launching the 
EXIT and Transitional Case Management programs. In 2011, CASES merged its Criminal Court and Mental Health programs into 
a new program group, Adult Behavioral Health, which Ms. Louison currently leads. She is also a consultant to the Council 
of State Governments (CSG) Justice Center and is regularly selected to attend national expert panel discussions on jail 
diversion. In January 2010, she participated on such a panel convened by the National GAINS Center to reflect on 
conclusions from SAMHSA's Targeted Capacity Expansion Jail Diversion cross-site evaluation. Prior to joining CASES, Ms. 
Louison was a social worker for the Manhattan Psychiatric Center on Ward's Island and a probation officer in England.
</p></span>

<div class="divider"></div>

<img src="http://www.casesnyc.org/test/images/shanasm.jpg" class="eteam">
<p class="emphasis">Shana McMahan, Director of Strategic Planning and Analysis</p>
<p>
Ms. McMahan joined CASES in 1999 as assistant to the CFO, where she helped develop protocols for tracking the agency's 
first performance-based contracts. In 2002, she became CASES' first director of the newly established Performance 
Measurement Unit and, in 2006, was promoted to Director of Strategic Planning and Analysis, a post that currently 
combines performance measurement, development and communications, planning, and evaluation. Prior to coming to CASES, Ms. 
McMahan had nearly ten years of non-profit administration experience in the fields of arts, education, and healthcare. 
She holds a B.A. from Sarah Lawrence College.
</p>
</div>
<!-- <div class="general">
<? /* php if (have_posts()) :
   while (have_posts()) : the_post(); ?>
	<?php the_content() ;?>
   </div>
	<?php endwhile;
	endif; */ ?> -->
</div>

<div class="two columns"></div>

<script type="text/javascript">$('span.expander').expander();</script>

<script type="text/javascript">$(document).ready(function() {
        $('.help, .help2').click(function() {
                $('.tooltip').slideToggle("fast");
        });
    });</script>
	
<script type="text/javascript">$(document).ready(function() {
        $('.help3, .help4').click(function() {
                $('.tooltip2').slideToggle("fast");
        });
    });</script>
<script type="text/javascript">$(document).ready(function() {
        $('.mhelp, .mhelp2').click(function() {
                $('.mtooltip').slideToggle("fast");
        });
    });</script>
	
<script type="text/javascript">$(document).ready(function() {
        $('.mhelp3, .mhelp4').click(function() {
                $('.mtooltip2').slideToggle("fast");
        });
    });</script>

<div class="bigrow"></div>

<?php get_footer(); ?>