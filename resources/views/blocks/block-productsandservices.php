<?php

/**
 * Block Name: Products & Services Block
 *
 * This is the template that displays the products and services block.
 */

  // Create variables from custom fields here

  $title = get_field('main_title');

  $pands_blocks = get_field('products_and_services');

?>

<div class="products_services py-6 px-5 md:px-11 md:py-8">
    <h3 class="text-2xl md:text-xxl leading-snug pb-10 md:pb-15 md:py-5"><?php echo $title; ?></h3>
    <div class="grid grid-cols-1 gap-10 md:grid-cols-3"> 
        <?php if( count($pands_blocks) > 0 ) {
            foreach( $pands_blocks as $pands_block ) { 
        ?> 
            <?php if($pands_block['link']): ?>
                <a class="block h-full leading-snug hover:-translate-y-2 focus:-translate-y-2 hover:font-semibold focus:font-semibold transition-all duration-300" href="<?php echo $pands_block['link']['url'] ?>" target="<?php echo $pands_block['link']['target'] ?>"> 
                    <div class="flex flex-col justify-between h-full">
                        <div class="flex-grow pb-20">
                            <h4 class="title !text-lg leading-snug py-4 flex justify-between"><?php echo $pands_block['title'] ?></h4>
                            <p class="text-sm text-grey"><?php echo $pands_block['content'] ?></p>
                        </div>
                        <div class="cta_btn text-sm pb-2 w-full flex items-center md:text-base" aria-label="show more products/services">
                            Show more 
                            <img class="inline-block h-6 w-8 pl-4" src="<?php echo asset('/images/svg/arrow-black.svg'); ?>" alt="right facing black arrow" />
                        </div>
                        <hr class="w-full h-[1px] bg-grey my-6"></hr>
                        <img class="h-[229px] object-fit" src="<?php echo esc_url($pands_block['image']['url']); ?>" alt="<?php echo esc_attr($pands_block['image']['alt']); ?>" /> 
                    </div>
                </a>
            <?php endif; ?>
        <?php 
            } 
    } ?>
    </div>
</div>