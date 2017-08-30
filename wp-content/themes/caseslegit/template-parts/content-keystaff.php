<?php
/**
 * The template used for displaying the key staff page.
 *
 * @package CASES Legit
 */
?>
<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $thumb_original, false, ''); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-container">
        <div class="leadimage-container3">
            <header class="entry-header">
<?php the_title('<h1 class="entry-title">'); ?></h1>
            </header><!-- .entry-header --></div>
        <div class="entry-content-keystaff">
            <ul class="keystaff-grid" role="tablist">

                <li class="keystaff-item joel active"><a href="#joel" aria-controls="joel" role="tab" data-toggle="tab">
                        <div class="keystaff-shade"><strong>Joel Copperman</strong><br/>Chief Executive Officer</div></a>
                </li>
                <li class="keystaff-item rebecca"><a href="#rebecca" aria-controls="rebecca" role="tab" data-toggle="tab">
                        <div class="keystaff-shade"><strong>Rebecca Asbury</strong><br/>Chief Financial Officer</div></a>
                </li>
                 <li class="keystaff-item quinn"><a href="#quinn" aria-controls="quinn" role="tab" data-toggle="tab"><div class="keystaff-shade"><strong>Quinn Cushing</strong>
                            <br/>Chief Information Officer</div></a>
                </li>
                <li class="keystaff-item george"><a href="#george" aria-controls="george" role="tab" data-toggle="tab"><div class="keystaff-shade"><strong>George Drakopolous</strong><br/>Deputy Director, Finance and Administration </div></a>
                </li>
                <li class="keystaff-item karen"><a href="#karen" aria-controls="karen" role="tab" data-toggle="tab"><div class="keystaff-shade">
                            <strong>Karen Dubin-McKnight</strong><br/>Director, Court Operations</div></a>
                </li>
                <li class="keystaff-item holly"><a href="#holly" aria-controls="holly" role="tab" data-toggle="tab">
                        <div class="keystaff-shade"><strong>Holly Francis-Merritt</strong><br/>Director, Human Resources</div>
                    </a></li>

                    <li class="keystaff-item jessica"><a href="#jessica" aria-controls="jessica" role="tab" data-toggle="tab"><div class="keystaff-shade"><strong>Jessica Klaver</strong><br/>
                            Senior Director, Behavioral Health Services</div></a>
                </li>

                <li class="keystaff-item aml"><a href="#aml" aria-controls="aml" role="tab" data-toggle="tab"><div class="keystaff-shade">
                            <strong>Ann-Marie Louison</strong><br/>Chief Strategic Initiatives Officer</div></a>
                </li>
                <a href="#dawn" aria-controls="dawn" role="tab" data-toggle="tab"><li class="keystaff-item dawn"><div class="keystaff-shade"><strong>Dawn J. McClary</strong><br/>General Counsel and Compliance Officer</div></a>
                </li>

                <li class="keystaff-item loyal">
                    <a href="#loyal" aria-controls="loyal" role="tab" data-toggle="tab"><div class="keystaff-shade">
                            <strong>Loyal Miles</strong><br/>Chief Development and Communiations Officer</div></a>
                </li>

                <li class="keystaff-item mardoche"><a href="#mardoche" aria-controls="mardoche" role="tab" data-toggle="tab"><div class="keystaff-shade">
                            <strong>Mardoche Sidor</strong><br/>Medical Director</div>
                    </a> </li>
            </ul></div>
<div class="sidebar-about sidebar-keystaff"><?php get_sidebar('about'); ?>
</div>

<div class="keystaff-description">
<?php the_content(); ?>
</div>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'caseslegit'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->

    </div>
    <footer class="entry-footer">
<?php edit_post_link(esc_html__('Edit', 'caseslegit'), '<span class="edit-link">', '</span>'); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
