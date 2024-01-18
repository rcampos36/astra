<?php if( have_rows('about_page_content') ): ?>

<?php while ( have_rows('about_page_content') ) : the_row();?>

  <?php if (get_row_layout() == 'featured_client'):?>
    <!-- 	hero block title-->
    <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif;?>

  <?php if (get_row_layout() == 'featured_client'):?>
    <!-- 	hero block -->
    <?php echo $__env->make('blocks.featured-client-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif;?>

<?php endwhile; endif; ?><?php /**PATH /Users/macuser/Projects/astra/wp-content/themes/astra/resources/views/partials/acf-flex-content.blade.php ENDPATH**/ ?>