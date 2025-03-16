
  @php

  $main_logo = get_field('logo', 'option');

  $hamburger_settings = get_field('hamburger_menu_settings', 'option');

  @endphp



<header class="banner px-5 md:px-11 py-3 md:py-5">
  <div class="flex justify-between items-center">
    <!-- Logo -->
      <a class="brand" href="{{ home_url('/') }}" aria-label="navigate to home page">
        <img class="max-h-10 object-contain md:max-h-16" src="<?php echo esc_url($main_logo['url']); ?>" alt="<?php echo esc_attr($main_logo['alt']); ?>" />
      </a>

    <div class="flex items-center">
      <!-- Main Navigation -->
      <div id="primary-nav-container">
        @if (has_nav_menu('primary_nav'))
          <nav class="nav-primary md:px-4 lg:px-8 text-sm lg:text-base hidden md:!block" aria-label="{{ wp_get_nav_menu_name('primary_nav') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_nav', 'menu_class' => 'nav', 'echo' => false]) !!}
          </nav>
        @endif
      </div>

      <!-- Hamburger Button -->
      <div id="hamburger-container" class="hamburger_menu">
          <button id="hamburger-button"  class="navbar-toggler hamburger flex flex-col justify-between cursor-pointer items-center" type="button" data-toggle="modal" data-target="#menuModal" aria-label="toggle hamburger menu">
              <div class="h-0.5 mb-0.5 bg-blue w-16 md:w-20 transition-transform transform topline"></div>
              <div class="h-0.5 mt-0.5 bg-blue w-16 md:w-20 transition-transform transform bottomline"></div>
          </button>
      </div>
    </div>
  </div>

  <!-- Hamburger Dropdown Menu-->
  <div id="hamburger-dropdown-menu" class="py-5 hidden">
    <div class="flex flex-col-reverse md:flex-row "> 
      <div class="sub_menu left w-full md:w-1/2 pt-8 md: pr-2 md:pt-0 left-menu-container">
        @if( $hamburger_settings['left_menu_title'] )
          <div class="menu">
            <h4 class="!font-bold">@php echo $hamburger_settings['left_menu_title'] @endphp</h4>
            <div class="business-list" >@php echo $hamburger_settings['left_side_menu'] @endphp</div>
          </div>
        @endif
      </div>
      
      <div class="sub_menu right w-full md:w-1/2">
        @if( $hamburger_settings['main_hamburger_menu'] )
            <div class="menu">
              @php echo $hamburger_settings['main_hamburger_menu'] @endphp
          </div>
        @endif
      </div>
    </div>
  </div>

</header>

<script>
    const arrowIconUrl = "<?php echo asset('/images/svg/arrow-black.svg'); ?>"; // define the URL to be used in header.js
</script>