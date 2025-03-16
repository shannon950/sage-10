<?php

/**
 * Block Name: Text Block
 *
 * This is the template that displays the text block.
 */

  // Create variables from custom fields here.
  $main_title = get_field('main_title');
  $text_blocks = get_field('text_block');

?>

<div class="text_component px-5 md:px-11 py-4 md:py-8">
    <h3 class="main_title pb-10 md:pb-16 text-2xl md:text-xxl"><?php echo $main_title; ?></h3>
    <div class="grid grid-cols-1 gap-14 leading-snug md:grid-cols-3">
        <?php if( $text_blocks ) {
            foreach( $text_blocks as $text_block ) { ?>
            <div class="leading-snug">
                <h5 class="title border-t border-t-grey border-opacity-50 pt-3"><?php echo $text_block['title'] ?></h5>
                <h5 class="sub_title text-grey pb-3"><?php echo $text_block['sub_title'] ?></h5>
                <p class="text-grey"><?php echo $text_block['content'] ?></p>
            </div>
        <?php } 
        } ?>
    </div>
</div>
