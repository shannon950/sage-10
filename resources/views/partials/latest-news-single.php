<article class="swiper-slide h-auto" <?php echo post_class(); ?>>
  <?php $image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
    <a class="block h-full leading-snug hover:-translate-y-2 focus:-translate-y-2 hover:font-semibold focus:font-semibold transition-all duration-300" href="<?php echo the_permalink(); ?>"> 
        <div class="flex flex-col justify-between h-full">
            <div class="flex-grow">
                <img class="pt-4 max-h-full w-full object-contain" src="<?php echo $image_url; ?>" alt="Post Featured Image" /> 
                <h5 class="title leading-snug py-4 flex justify-between"><?php echo the_title(); ?></h5>
                <div class="text-sm text-grey pb-4"> <?php echo the_excerpt(); ?></div>
            </div>
            <div class="cta_btn text-sm text-blue pt-5 border-t-2 border-t-border-grey pb-2 w-full flex items-center md:text-base" aria-label="read more">
                Read more
                <img class="inline-block h-6 w-4 ml-2" src="<?php echo asset('/images/svg/arrow-blue.svg'); ?>" alt="right facing blue arrow" />
            </div>
        </div>
    </a>
</article>