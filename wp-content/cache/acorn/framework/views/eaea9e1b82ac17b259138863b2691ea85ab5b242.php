<header class="banner w-full mb-10 lg:mb-0 bg-body-color flex items-center h-[112px] justify-center z-10 sticky">
  <div class=" w-full mx-auto py-0 px-14 flex justify-between items-center border-b h-[112px] fixed bg-body-color">
    <a class="brand text-4xl text-persina-blue font-thin font-barlow" href="<?php echo e(home_url('/')); ?>">
      <?php echo $siteName; ?>

    </a>

    <?php if(has_nav_menu('primary_navigation')): ?>
      <nav class="nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

      </nav>
    <?php endif; ?>
  </div>
  
</header>
<?php /**PATH /Users/macuser/Projects/astra/wp-content/themes/astra/resources/views/sections/header.blade.php ENDPATH**/ ?>