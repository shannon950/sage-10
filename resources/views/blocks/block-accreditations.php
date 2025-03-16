<?php

/**
 * Block Name: Accreditations Block
 *
 * This is the template that displays the Accreditations block.
 */

  // Create variables from custom fields here

  $accreditations = get_field('accreditations');
  $index = 0;
?>

<div class="accreditations_component px-5 md:px-11 py-8 flex items-center justify-around">
    <div class="w-3/5 grid grid-cols-1 gap-y-10 md:grid-cols-2 md:w-full md:gap-x-5 lg:gap-x-0"> 
        <?php if( $accreditations ) {
            foreach( $accreditations as $accreditation ) { ?>
                <div class="accreditation grid grid-cols-1 gap-5 md:grid-cols-[45%_45%_10%]">
                    <div class="left md:w-full">
                        <h3 class="title underline leading-snug pb-4 flex"><?php echo $accreditation['title']; ?></h3>
                        <p class="sub-title leading-snug flex"><?php echo $accreditation['sub_title']; ?></p>
                        <div class="w-full flex justify-around"> 
                         <?php if( $accreditation['bsi_stamp'] ) { ?>
                            <img class="max-h-full object-contain py-4" src="<?php echo esc_url($accreditation['bsi_stamp']['url']); ?>" alt="<?php echo esc_attr($accreditation['bsi_stamp']['alt']); ?>" />
                        <?php } ?>
                        </div>
                        <div class="w-full flex justify-around"> 
                        <?php if( $accreditation['file'] ) { ?>
                            <a class="w-full flex justify-center mt-6 py-3 px-8 text-white border-2 border-black bg-black rounded-l-full rounded-r-full hover:bg-grey hover:outline-[3px] focus:outline-[3px] hover:-translate-y-2 focus:-translate-y-2 hover:font-semibold focus:font-semibold transition-all duration-300"  href="<?php echo $accreditation['file']['url'] ?>" target="_blank">
                                <button class="cta_btn" aria-label="view pdf">View PDF</button>
                            </a>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="right flex justify-around md:w-full">
                        <?php if( $accreditation['file'] ) { ?>
                        <a class="file_preview" href="<?php echo $accreditation['file']['url'] ?>" target="_blank">
                            <img class="max-h-full object-contain hover:bg-grey hover:outline-[3px] focus:outline-[3px] hover:-translate-y-2 focus:-translate-y-2 hover:font-semibold focus:font-semibold transition-all duration-300 hover:border-black hover:border-2" src="<?php echo esc_url($accreditation['file_preview']['url']); ?>" alt="<?php echo esc_attr($accreditation['file_preview']['alt']); ?>" />
                        </a> 
                        <?php } ?>
                    </div>
                    <?php if( $index % 2 === 0 ) : ?>
                        <hr class="hidden md:!block md:w-px md:h-1/3 md:bg-grey md:opacity-40 md:self-center"/>
                    <?php endif; ?>
                    <?php $index++; ?>
                </div>
                <hr class="w-full h-px bg-grey self-center md:hidden"/>
            <?php } 
        } ?>
        </div>
    </div>
</div>
