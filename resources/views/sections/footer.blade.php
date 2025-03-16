  <footer class="content-info px-5 md:px-11 mt-8 border-t-2 border-t-border-grey">
  @php
    $image = get_field('footer_logo', 'option');

    $locations = get_field('footer_locations', 'option');

    $menus = get_field('menus', 'option');

    $copyright = get_field('copyright_text', 'option');


  @endphp

    <div class="w-8/12 md:w-1/3 md:border-r-2 border-r-border-grey py-8">
      <img class="max-w-72 max-h-20 object-contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> 
    </div>
    
    <div class="flex-col md:flex md:flex-row justify-between md:border-b-2 border-r-border-grey">
      <div class="locations py-6 pr-6 border-b-2 border-r-border-grey md:border-r-2 md:border-b-0 md:w-1/3">
        @if( $locations )
          @foreach( $locations as $location )
          <div class="pb-4">
            <h5 class="!text-sm leading-snug md:leading-normal md:!text-base">@php echo $location['location'] @endphp</h5>
            <p class="font-medium text-sm text-grey leading-normal md:text-base md:leading-relaxed">@php echo $location['address'] @endphp</p>
          </div>
          @endforeach
        @endif
        
        <a href="{{ home_url('/') }}#map-block" class="inline-block text-blue !text-base leading-snug hover:font-semibold pb-8">View all locations 
          <img class="inline-block ml-2 h-4 w-4" src="<?php echo asset('/images/svg/arrow-blue.svg'); ?>" alt="right facing blue arrow" />
        </a> 
      </div>

      <div class="menus flex-col justify-between py-6 border-b-2 md:w-2/3 md:flex md:flex-row md:border-b-0 md:px-4 lg:px-12 xl:px-24">
        @if( $menus )
            @foreach( $menus as $menu )
              <div class="menu pb-2">
                <h4 class="footer-sub-menu-title !text-base flex justify-between w-full items-center cursor-pointer md:cursor-default leading-snug md:!leading-normal md:!text-lg">@php echo $menu['menu_title'] @endphp
                  <span class="expand-icon-footer text-blue !text-xl inline-block pb-1 font-semibold leading-4 opacity-60"></span>
                </h4>
                <span class="footer-nested-item leading-relaxed text-grey md:pl-0 md:pt-3 md:!block md:leading-loose">@php echo $menu['choose_menu'] @endphp</span>
              </div>
            @endforeach
        @endif
      </div> 
    </div>

    <div class="footer_bottom flex-col justify-between md:flex md:flex-row-reverse">
      <div class="flex-col py-6 border-b-2 leading-snug md:flex md:border-b-0"> 
          @if (has_nav_menu('footer_nav'))
              {!! wp_nav_menu([
                'theme_location' => 'footer_nav',
                'menu_class'     => 'nav navbar-nav primary-nav',
                'depth'          => 1, 
                ]) !!}
            @endif
      </div>
      <p class="copyright py-6 pr-6 border-r-border-grey text-black text-base leading-snug md:w-1/3 md:border-r-2">&copy; @php echo date ('Y'), str_repeat("&nbsp;", 1), $copyright @endphp</p>
    </div>

</footer>