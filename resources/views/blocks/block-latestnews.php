<?php

/**
 * Block Name: Latest News Block
 *
 * This is the template that displays the intro text block.
 */

  // Create variables from custom fields here.
  $main_title = get_field('main_title');
  $sub_content = get_field('sub_content');

  ?>

<div class="latest_news py-8 px-5 md:px-11">

    <div class="w-full leading-snug flex justify-between pb-6">
        <div>
            <h3 class="text-xxl"><?php echo $main_title; ?></h3>
            <p class="text-grey pt-4"><?php echo $sub_content; ?></h3>
        </div>
        <div class="swiper-button-container flex justify-between align-center">
            <button class="swiper-button-prev h-full !mr-2 !text-black !mt-0 !static after:!content-[''] !rotate-180 after:!text-sm">
                <img class="inline-block h-6 w-3.5" src="<?php echo asset('/images/svg/arrow-black.svg'); ?>" alt="left facing black arrow" />
            </button>
            <button class="swiper-button-next h-full !ml-2 !text-black !mt-0 !static after:!content-[''] after:!text-sm">
                <img class="inline-block h-6 w-3.5" src="<?php echo asset('/images/svg/arrow-black.svg'); ?>" alt="right facing black arrow" />
            </button>
        </div>
    </div>
    
    <div class="swiper-container-news overflow-hidden"> 
        <div class="swiper-wrapper">
            <?php
            $args = array (
            'post_type'              => 'post',
            'nopaging'               => false,
            'posts_per_page'         => '6',
            'order'                  => 'ASC',
            'orderby'                => 'date',
            );
            $query = new WP_Query( $args );
            
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    include( get_theme_file_path("/resources/views/partials/latest-news-single.php") );
                }
            } else {
            // display when no posts found
            }
            wp_reset_postdata();     // Restore original Post Data
            ?>
        </div>
    </div>

</div>
