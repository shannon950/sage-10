<?php

/**
 * Block Name: Content Cards Carousel Block
 *
 * This is the template that displays the content cards carousel block.
 */

  // Create variables from custom fields here

  $title = get_field('main_title');
  $sub_content = get_field('sub_content');
  $main_link = get_field('main_page_link');

  $cards = get_field('cards');

?>

<div class="content_cards px-5 md:pl-11 md:pr-0 py-4 md:py-8">
  <div class="w-full flex justify-center">
    <div class="grid grid-cols-1 gap-5 z-10 md:grid-cols-3">
        <div class="flex flex-col col-span-1 lg:pt-12 pr-10">
            <h2 class="main_title text-xl leading-snug md:text-xxl"><?php echo $title; ?></h2>
            <p class="sub_content text-grey leading-snug pt-2"><?php echo $sub_content; ?></p>
            <?php if( $main_link ) { ?>
              <a href="<?php echo $main_link['url'] ?>" target="<?php echo $main_link['target'] ?>">
                <div class="cta_btn" aria-label="<?php echo $title; ?>">
                  <img class="inline-block mt-4 h-8 w-6" src="<?php echo asset('/images/svg/arrow-black.svg'); ?>" alt="right facing black arrow" />
                </div>
              </a>
            <?php }  ?>
        </div>

        <div class="swiper-container-content-cards col-span-2 overflow-hidden flex flex-col">
            <div class="swiper-wrapper">
              <?php if( $cards ) {
                  foreach( $cards as $card ) { ?>
                  <div class="swiper-slide">
                      <div class="card_img cursor-grab">
                        <?php if($card['image']): ?>
                          <img class="h-[471px] object-cover" src="<?php echo esc_url($card['image']['url']); ?>" alt="<?php echo esc_attr($card['image']['alt']); ?>" />
                          <?php endif; ?>
                      </div>
                      <div class="card_content"> 
                          <?php if( $card['link'] ) { ?>
                            <a class="flex flex-wrap items-center justify-between cursor-pointer py-2 md:flex-nowrap" href="<?php echo $card['link']['url'] ?>" target="<?php echo $card['link']['target'] ?>">
                              <h5 class="title flex-wrap break-words"><?php echo $card['title'] ?></h5>
                              <img class="inline-block h-4 w-4" src="<?php echo asset('/images/svg/arrow-black.svg'); ?>" alt="right facing black arrow" />
                            </a>
                          <?php } else {?>
                            <h5 class="title py-2"><?php echo $card['title'] ?></h5>
                          <?php }  ?>
                          </div>
                      </div>
              <?php } 
              } ?>
              </div>
        </div>
    </div>
  </div>  
</div>
