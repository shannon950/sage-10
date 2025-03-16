<?php

/**
 * Block Name: Intro Text Block
 *
 * This is the template that displays the intro text block.
 */

  // Create variables from custom fields here.
  $left_text = get_field('left_text');
  $text_colour = get_field('text_color');

  $main_heading = get_field('main_heading');
  $content = get_field('content');

?>

<div class="intro_component flex flex-col py-4 px-5 md:px-11 md:py-8 md:flex-row gap-4 md:gap-8">
    <div class="component_left text-sm leading-snug md:w-1/3 md:text-base">
        <h4 class="main_heading !font-bold pb-3 md:!py-2" style="color:#<?php echo $text_colour; ?>"><?php echo $left_text; ?>
    </div>
    <div class="component_right flex flex-col gap-4 md:w-2/3 md:gap-6">
        <h3 class="!text-xl leading-snug !text-black/80 md:!text-xxl"><?php echo $main_heading; ?></h3>
        <p class="!text-sm md:!text-lg text-grey leading-snug"><?php echo $content; ?></p>
    </div>
</div>