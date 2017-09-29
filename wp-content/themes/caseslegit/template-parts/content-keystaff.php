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
              <?php
              /* This is the loop for the first portrait, active by default */
              $argsKeyStaff = array(
                  'post_type' => 'keystaff',
                  'posts_per_page' => 1,
                  'meta_key' => 'custom_position',
                  'meta_value' => '1'
              );
              $queryKeyStaff = new WP_Query($argsKeyStaff);
              while ($queryKeyStaff->have_posts()) :
                  $queryKeyStaff->the_post(); ?>
                  <li class="keystaff-item active" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                    <a href="#<?php the_ID(); ?>" aria-controls="<?php the_ID(); ?>" role="tab" data-toggle="tab">
                      <div class="keystaff-shade"><strong><?php the_field('first_name') ?>
                        <?php the_field('last_name') ?>
                      </strong><br/>
                        <?php the_field('title') ?></div></a>
                  </li>

                <?php endwhile;
                wp_reset_postdata();
                ?>

                <?php
                /* This is the loop for the rest of the portraits with custom positions  */
                $argsKeyStaff = array(
                    'post_type' => 'keystaff',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        'custom_position_clause' => array(
                          'key' => 'custom_position',
                          'value' => 1,
                          'compare' => '>',
                      )
                    ),
                );
                $queryKeyStaff = new WP_Query($argsKeyStaff);
                while ($queryKeyStaff->have_posts()) :
                    $queryKeyStaff->the_post(); ?>
                    <li class="keystaff-item" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                      <a href="#<?php the_ID(); ?>" aria-controls="<?php the_ID(); ?>" role="tab" data-toggle="tab">
                        <div class="keystaff-shade"><strong><?php the_field('first_name') ?>
                          <?php the_field('last_name') ?>
                        </strong><br/>
                          <?php the_field('title') ?></div></a>
                    </li>

                  <?php endwhile;
                  wp_reset_postdata();
                  ?>

              <?php
              $argsKeyStaff = array(
                  'post_type' => 'keystaff',
                  'posts_per_page' => -1,
                  'meta_query' => array(
                    array(
                      'relation' => 'AND',
                      'last_name_clause' => array(
                        'key' => 'last_name',
                        'compare' => 'exists',
                      ),
                      'custom_position_clause' => array(
                        'key' => 'custom_position',
                        'value' => '',
                        'compare' => 'exists',
                      ),
                    )
                  ),
                  'orderby' => array(
                    'custom_position_clause' => 'asc',
                    'last_name_clause' => 'asc',
                  ),
              );
              $queryKeyStaff = new WP_Query($argsKeyStaff);
              while ($queryKeyStaff->have_posts()) :
                  $queryKeyStaff->the_post();
              ?>
              <li class="keystaff-item" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                <a href="#<?php the_ID(); ?>" aria-controls="<?php the_ID(); ?>" role="tab" data-toggle="tab">
                  <div class="keystaff-shade"><strong><?php the_field('first_name') ?>
                    <?php the_field('last_name') ?>
                  </strong><br/>
                    <?php the_field('title') ?></div></a>
              </li>
            <?php endwhile;
            wp_reset_postdata();
            ?>

            </ul></div>
<div class="sidebar-about sidebar-keystaff"><?php get_sidebar('about'); ?>
</div>

<!-- Main body, underneath the portraits -->

<div class="keystaff-description">

  <?php
  /* This is the loop for the visible (first) blurb with image */
  $argsKeyStaff = array(
      'post_type' => 'keystaff',
      'posts_per_page' => 1,
      'meta_key' => 'custom_position',
      'meta_value' => '1'
  );
  $queryKeyStaff = new WP_Query($argsKeyStaff);
  while ($queryKeyStaff->have_posts()) :
      $queryKeyStaff->the_post(); ?>

  <div id="<?php the_ID(); ?>" class="tab-pane fade in active">
  <div class="keystaff-content">
  <div class="keystaff-lg-portrait" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
  <div class="keystaff-words">
  <h2><?php the_field('first_name') ?> <?php the_field('last_name') ?></h2>
  <h3><?php the_field('title') ?></h3>

  <?php the_content(); ?>

  </div>
  </div>
  </div>

<?php endwhile;
wp_reset_postdata();
?>

  <?php
  /* This content is hidden on page load, but will be displayed when a user
  clicks the appropriate portrait */

  $argsKeyStaff = array(
      'post_type' => 'keystaff',
      'posts_per_page' => -1,
      'meta_query' => array(
          'custom_position_clause' => array(
            'key' => 'custom_position',
            'value' => 1,
            'compare' => '!=',
        )
      ),
  );
  $queryKeyStaff = new WP_Query($argsKeyStaff);
  while ($queryKeyStaff->have_posts()) :
      $queryKeyStaff->the_post(); ?>

  <div id="<?php the_ID(); ?>" class="tab-pane fade">
  <div class="keystaff-content">
  <div class="keystaff-lg-portrait" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
  <div class="keystaff-words">
  <h2><?php the_field('first_name') ?> <?php the_field('last_name') ?></h2>
  <h3><?php the_field('title') ?></h3>

  <?php the_content(); ?>

  </div>
  </div>
  </div>

<?php endwhile;
wp_reset_postdata();
?>
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
