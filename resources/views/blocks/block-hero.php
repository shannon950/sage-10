<?php

/**
 * Block Name: Hero Block
 *
 * This is the template that displays the hero block.
 */

  // Create variables from custom fields here


$hero_type = get_field('hero_type');

//Video fields
$video_title = get_field('video_title');
$video_content = get_field('video_content');


//Image fields
$hero_image = get_field('hero_image');
$image_title = get_field('image_title');
$title_colour = get_field('title_colour');
$image_content = get_field('image_content');

//Overlay fields

$overlay = get_field('overlay');

$overlay_title = get_field('overlay_title');
$overlay_content = get_field('overlay_content');

?>

<div id="hero_block" class="pb-4 md:pb-8 <?php if( $hero_type  == 'video') { ?>hero_video <?php } else { ?>hero_image <?php } ?>">
  <?php if( $hero_type  == 'video') { ?> 
    <div class="embed-container video w-full relative">
        <?php the_field('video'); ?>
        <?php if( $video_title ) { ?>
        <h5 class="video_title font-bold leading-snug text-sm absolute top-[355px] left-2 z-10 text-white w-full md:text-base md:top-[375px] md:left-8 md:w-2/3"><?php echo $video_title; ?></h5>
        <?php }  ?>
        <?php if( $video_content ) { ?>
        <h5 class="video_content text-2xl pt-3 absolute top-[380px] left-2 z-10 text-white w-full md:pt-0 md:text-xxl md:leading-normal md:top-[400px] md:left-8 md:w-2/3"><?php echo $video_content; ?></h5>
        <?php }  ?>
      </div>
    </div>
  <?php } else { ?>
  <div class="hero_img bg-cover bg-center" <?php if( $overlay == 1 ) { ?>style="height: 75vh; background-image:url(<?php echo esc_url($hero_image['url']); ?>);"<?php }  ?>>
    <?php if( $overlay == 0 ) { ?>
        <div class="lg:w-2/3 pb-7 pl-5 md:pl-11"> 
          <?php if( $image_title ) { ?>
            <h5 class="image_title font-bold leading-snug text-sm md:text-base" style="color:#<?php echo $title_colour; ?>"><?php echo $image_title; ?></h5>
          <?php }  ?>
          <?php if( $image_content ) { ?>
            <h5 class="image_content text-2xl pt-3 md:pt-0 md:text-2xxl md:leading-normal"><?php echo $image_content; ?></h5>
          <?php }  ?>
        </div>
        <img class="inline-block w-full h-[75vh] object-cover" src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
    <?php }  else {?>
      <div class="pl-5 md:pl-11 py-6 flex flex-col justify-end h-full bg-gradient-to-t from-[rgba(0,0,0,0.3)] to-transparent">
          <?php if( $overlay_title ) { ?>
              <h5 class="image_title md:w-2/3 text-white font-bold leading-snug text-sm md:text-base"><?php echo $overlay_title; ?></h5>
          <?php } ?>
          <?php if( $overlay_content ) { ?>
              <h3 class="image_content md:w-2/3 text-white text-2xl pt-3 md:pt-0 md:text-2xxl md:leading-normal"><?php echo $overlay_content; ?></h3>
          <?php } ?>
      </div>
    <?php } ?>
  </div>

</div>

<?php } ?>
