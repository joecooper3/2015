<?php
/**
 * The template used for displaying the key staff page.
 *
 * @package CASES Legit
 */

?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_original, false, '' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <style type="text/css" media="screen">
        .serv-bgimage { 
         background: url(<?php echo $src[0]; ?>); 
         background-size: cover; 
         background-position: center;
        }
    </style>
<div class="about-container">
    <div class="leadimage-container3">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">' ); ?></h1>
        </header><!-- .entry-header --></div>
	<div class="entry-content-keystaff">
            <ul class="keystaff-grid" role="tablist">
            
                <li class="keystaff-item joel active"><a href="#joel" aria-controls="joel" role="tab" data-toggle="tab">
                        <div class="keystaff-shade"><strong>Joel Copperman</strong><br/>Chief Executive Officer</div></a>
                    </li>
               <li class="keystaff-item rebecca"><a href="#rebecca" aria-controls="rebecca" role="tab" data-toggle="tab">
                       <div class="keystaff-shade"><strong>Rebecca Asbury</strong><br/>Chief Financial Officer</div></a>
                    </li>
                    <li class="keystaff-item george"><a href="#george" aria-controls="george" role="tab" data-toggle="tab"><div class="keystaff-shade"><strong>George Drakopolous</strong><br/>Deputy Director of Finance and Administration </div></a>
                    </li>
                <li class="keystaff-item aml"><a href="#aml" aria-controls="aml" role="tab" data-toggle="tab"><div class="keystaff-shade">Ann-
                            <strong>Marie Louison</strong><br/>Director of Adult Behavioral Health</div></a>
                    </li>
                <li class="keystaff-item rukia"><a href="#rukia" aria-controls="joe" role="tab" data-toggle="tab">
                        <div class="keystaff-shade"><strong>Rukia Lumumba</strong><br/>
                            Director of Youth Programs</div></a>
                    </li>
                    <li class="keystaff-item rob"><a href="#rob" aria-controls="joe" role="tab" data-toggle="tab">
                            <div class="keystaff-shade"><strong>Robert DeLeon</strong><br/>
                                Associate Director of Youth Programs</div></a>
                    </li>
                    <a href="#joanna" aria-controls="joanna" role="tab" data-toggle="tab"><li class="keystaff-item joanna"><div class="keystaff-shade"><strong>Joanna Fahey</strong><br/>Director of the Nathaniel Clinic</div></a>
                    </li>
                    <a href="#dawn" aria-controls="dawn" role="tab" data-toggle="tab"><li class="keystaff-item dawn"><div class="keystaff-shade"><strong>Dawn J. McClary</strong><br/>Legal Counsel</div></a>
                    </li>
                    
                    <li class="keystaff-item rebeccalw"><a href="#rebeccalw" aria-controls="rebeccalw" role="tab" data-toggle="tab"><div class="keystaff-shade"><strong>Rebecca Linn-Walton</strong><br/>Director of Planning, Research, and Evaluation</div></a>
                    </li>
                    
            
                <li class="keystaff-item lucie"><a href="#lucie" aria-controls="lucie" role="tab" data-toggle="tab"><div class="keystaff-shade">
                            <strong>Lucie Swinnerton</strong><br/>Deputy Director of Planning, Evaluation, and Research</div>
               </a> </li>
                        <li class="keystaff-item loyal">
                                <a href="#loyal" aria-controls="loyal" role="tab" data-toggle="tab"><div class="keystaff-shade">
                                        <strong>Loyal Miles</strong><br/>Director of Development and 
                                        Communications</div></a>
                    </li>
                    <li class="keystaff-item jessica"><a href="#jessica" aria-controls="jessica" role="tab" data-toggle="tab"><div class="keystaff-shade"><strong>Jessica Klaver</strong><br/>
                                Director of Adult Community Programs</div></a>
                    </li>
                    <li class="keystaff-item allison"><a href="#allison" aria-controls="allison" role="tab" data-toggle="tab"><div class="keystaff-shade">
                                <strong>Allison Upton</strong><br/>Director of Adult Court Programs</div></a>
                    </li>
                    <li class="keystaff-item holly"><a href="#holly" aria-controls="holly" role="tab" data-toggle="tab">
                            <div class="keystaff-shade"><strong>Holly Francis-Merritt</strong><br/>Director of Human Resources</div>
                    </li>
            <a href="#quinn" aria-controls="quinn" role="tab" data-toggle="tab">
                <li class="keystaff-item quinn"><div class="keystaff-shade"><strong>Quinn Cushing</strong>
                        <br/>Director of Information Services</div></a>
                        </li></ul>
                
                                              
		<?php the_content(); ?>
                  
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caseslegit' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
       
</div>
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'caseslegit' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

