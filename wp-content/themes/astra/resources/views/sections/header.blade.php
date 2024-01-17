<header class="banner w-full mb-10 lg:mb-0 bg-body-color flex items-center h-[112px] justify-center z-10 sticky">
  <div class=" w-full mx-auto py-0 px-14 flex justify-between items-center border-b h-[112px] fixed bg-body-color">
    <a class="brand text-4xl text-persina-blue font-thin font-barlow" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
  
</header>
