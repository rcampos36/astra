<?php if( have_rows('about_page_content') ): ?>

<?php while ( have_rows('about_page_content') ) : the_row();?>

  <?php if (get_row_layout() == 'featured_client'):?>
    <!-- 	hero block title-->
    @include('partials.page-header')
  <?php endif;?>

  <?php if (get_row_layout() == 'featured_client'):?>
    <!-- 	hero block -->
    @include('blocks.featured-client-block')
  <?php endif;?>

<?php endwhile; endif; ?>