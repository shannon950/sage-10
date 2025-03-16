<?php

/**
 * Block Name: Product Services
 *
 * This is the template that displays the product services from options page.
 */

$title = get_field('main_title', 'option');
$sub_content = get_field('sub_content', 'option');
$cards = get_field('cards', 'option');

?>

<div class="content_cards px-5 md:px-11 py-4 md:py-8">
    <h2 class="main_title pb-4 text-xxl leading-snug md:xl"><?php echo $title; ?></h2>
    <p class="sub_content pb-14 !text-black/80 text-sm leading-snug md:text-base"><?php echo $sub_content; ?></p>
    <hr class="bg-grey h-0.5 w-full mb-6 opacity-30" />
    
    <?php if( count($cards) > 0 ): ?>
        <?php foreach( $cards as $card ):  ?>
            <?php if($card['link']): ?>
                <a href="<?php echo $card['link']['url'] ?>" target="<?php echo $card['link']['target'] ?>">
                    <div class="flex flex-col gap-8 pb-6 md:flex-row">
                        <img class="object-cover w-[435px] h-[216px]" src="<?php echo esc_url($card['image']['url']); ?>" alt="<?php echo esc_attr($card['image']['alt']); ?>" /> 
                        <div class="flex w-full justify-between">
                            <div class="card_content flex flex-col justify-center w-11/12 md:w-2/3">
                                <h5 class="title pb-3"><?php echo $card['title'] ?></h5>
                                <p class="text-sm text-grey md:text-base"><?php echo $card['content'] ?></p>
                            </div>
                            <div class="flex items-start md:items-center md:justify-end md:w-1/3">
                                <div class="cta_btn" aria-label="view product/service">
                                    <img class="inline-block h-5 w-4" src="<?php echo asset('/images/svg/arrow-black.svg'); ?>" alt="right facing black arrow" />
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr class="bg-grey h-0.5 w-full mb-6 opacity-30" />
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>