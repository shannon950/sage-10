<article @php(post_class())>
  <?php $image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
    <a class="block h-full leading-snug hover:-translate-y-2 focus:-translate-y-2 hover:font-semibold focus:font-semibold transition-all duration-300" href="{{ get_permalink() }}"> 
        <div class="flex flex-col justify-between h-full">
            <div class="flex-grow">
                <img class="pt-4 w-full h-[310px] object-cover" src="<?php echo $image_url; ?>" alt="Post Featured Image" /> 
                <h5 class="title leading-snug py-4 flex justify-between">{!! $title !!}</h5>
                <div class="text-sm text-grey pb-4"> @php(the_excerpt())</div>
            </div>
            <button class="cta_btn text-sm pt-5 border-t-2 border-t-border-grey pb-2 w-full flex items-center md:text-base" aria-label="read more">
                Read more
                <img class="inline-block h-4 w-4 ml-3" src="<?php echo asset('/images/svg/arrow-black.svg'); ?>" alt="right facing black arrow" />
            </button>
        </div>
    </a>
</article>