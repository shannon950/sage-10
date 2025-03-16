<?php

/**
 * Block Name: Text/Image Block
 *
 * This is the template that displays the text/image block.
 */

  // Create variables from custom fields here

  $col_one = get_field('column_1');
  $col_two = get_field('column_2');
?>

<div class="image_text_component flex flex-col-reverse px-5 md:px-11 py-4 md:py-8 text-sm text-grey leading-snug md:text-base md:flex-row md:justify-between">
    <div class="block_left w-full md:w-1/3">
    <?php if( $col_one['image'] ) { ?>
        <img class="w-full" src="<?php echo esc_url($col_one['image']['url']); ?>" alt="<?php echo esc_attr($col_one['image']['alt']); ?>" />
    <? } ?>
        <span class="w-full inline-block pt-4"><?php echo $col_one['image_caption'] ?></span>
    </div>
    <div class="block_right w-full md:w-1/2">
    <?php if( $col_two['image'] ) { ?>
        <img class="w-full" src="<?php echo esc_url($col_two['image']['url']); ?>" alt="<?php echo esc_attr($col_two['image']['alt']); ?>" />
    <? } ?> 
        <div class="py-4 space-y-3">
            <p><?php echo $col_two['content'] ?></p>
        </div>
    </div>
</div>