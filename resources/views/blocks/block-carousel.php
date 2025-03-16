<?php

/**
 * Block Name: Carousel Block
 *
 * This is the template that displays the carousel block.
 */

  // Create variables from custom fields here

  $slides = get_field('slides');

  $count = count( $slides );
?>
<div class="carousel_component py-4 md:py-8">
    <div class="flex justify-center">
        <div class="grid grid-cols-1 gap-4 z-10">
            <div class="swiper-container-featured-image overflow-hidden flex flex-col self-center">
              <div class="swiper-wrapper max-h-[80vh] w-full">
                  <?php if( $slides && $count > 1) {
                      foreach( $slides as $slide ) { ?>
                      <div class="swiper-slide relative max-h-[80vh]">
                          <img class="w-full max-h-full object-cover" src="<?php echo esc_url($slide['image']['url']); ?>" alt="<?php echo esc_attr($slide['image']['alt']); ?>" />
                          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(0,0,0,0.3)] to-transparent"></div> 
                          <p class="slide_content inline absolute bottom-0 left-0 w-4/5 p-5 text-white leading-snug"><?php echo $slide['slide_content'] ?></p>
                      </div>
                  <?php }
                  } else { 
                   foreach( $slides as $slide ) { ?>
                      <div class="single-slide relative max-h-[80vh]">
                        <img class="w-full max-h-full object-cover" src="<?php echo esc_url($slide['image']['url']); ?>" alt="<?php echo esc_attr($slide['image']['alt']); ?>" />
                        <div class="absolute inset-0 bg-gradient-to-t from-[rgba(0,0,0,0.3)] to-transparent"></div> 
                        <p class="slide_content inline absolute bottom-0 left-0 w-full p-5 text-white leading-snug md:w-4/5"><?php echo $slide['slide_content'] ?></p>
                      </div>
                  <?php }
                 } ?>
              </div>
              <div class="relative">
                <div class="swiper-pagination !text-right p-5"></div>
              </div>
            </div>
        </div>
    </div>  
</div>
