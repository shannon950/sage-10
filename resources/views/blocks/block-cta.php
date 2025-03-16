<?php

/**
 * Block Name: CTA
 *
 * This is the template that displays the CTA block.
 */

  // Create variables from custom fields here.
  $bg_colour = get_field('background_colour');

  $col_one = get_field('column_1');
  $col_two = get_field('column_2');
?>

<div class="cta_component grid grid-cols-1 md:grid-cols-5 my-4 md:my-8 md:flex-row px-5 py-4 md:py-20 md:px-10" style="background-color:#<?php echo $bg_colour; ?>">
    <div class="cta_left text-white text-xl leading-snug md:text-xxl col-span-3">
        <h4><?php echo $col_one['content'] ?></h4>
    </div>
    <div class="cta_left col-span-2 pt-5 md:pt-0 md:pl-10 lg:pl-32">
        <p class="text-white leading-snug pt-1 text-sm md:text-lg"><?php echo $col_two['content'] ?></p>
        <div class="flex align-center pt-7"> 
            <a class="flex justify-between w-full md:w-72 py-3 px-6 text-white outline outline-1 rounded-l-full rounded-r-full hover:outline-[3px] focus:outline-[3px] hover:-translate-y-2 focus:-translate-y-2 hover:font-semibold focus:font-semibold transition-all duration-300"  href="<?php echo $col_two['button']['url'] ?>" target="<?php echo $col_two['button']['target'] ?>">
                <div class="cta_btn" aria-label="contact us"><?php echo $col_two['button']['title'] ?>
                </div>
                <img class="inline-block h-6 w-3.5" src="<?php echo asset('/images/svg/arrow-white.svg'); ?>" alt="right facing white arrow" />
            </a>
        </div>
    </div>
</div>