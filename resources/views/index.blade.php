@extends('layouts.app')
@section('content')
  @include('partials.page-header')
  <?php

$hero_type = get_field('hero_type', 'option');

//Video fields
$video_title = get_field('video_title', 'option');
$video_content = get_field('video_content', 'option');


//Image fields
$hero_image = get_field('hero_image', 'option');
$image_title = get_field('image_title', 'option');
$title_colour = get_field('title_colour', 'option');
$image_content = get_field('image_content','option');

//Overlay fields

$overlay = get_field('overlay', 'option');

$overlay_title = get_field('overlay_title', 'option');
$overlay_content = get_field('overlay_content', 'option');

?>
  <div id="hero_block" class="pb-4 <?php if( $hero_type  == 'video') { ?>hero_video <?php } else { ?>hero_image <?php } ?>">
  <?php if( $hero_type  == 'video') { ?> 
    <div class="embed-container video w-full relative">
        <?php the_field('video'); ?>
        <?php if( $video_title ) { ?>
        <h5 class="video_title font-bold uppercase leading-snug text-sm absolute top-[355px] left-2 z-10 text-white w-full md:text-base md:top-[375px] md:left-8 md:w-2/3"><?php echo $video_title; ?></h5>
        <?php }  ?>
        <?php if( $video_content ) { ?>
        <h5 class="video_content text-2xl pt-3 absolute top-[380px] left-2 z-10 text-white w-full md:pt-0 md:text-xxl md:leading-normal md:top-[400px] md:left-8 md:w-2/3"><?php echo $video_content; ?></h5>
        <?php }  ?>
      </div>
    </div>
  <?php } else { ?>
  <div class="hero_img py-6 bg-cover bg-center" <?php if( $overlay == 1 ) { ?>style="height: 75vh; background-image:url(<?php echo esc_url($hero_image['url']); ?>);"<?php }  ?>>
    <?php if( $overlay == 0 ) { ?>
        <div class="lg:w-1/2 pb-7 pl-5"> 
          <?php if( $image_title ) { ?>
            <h5 class="image_title font-bold uppercase leading-snug text-sm md:text-base" style="color:#<?php echo $title_colour; ?>"><?php echo $image_title; ?></h5>
          <?php }  ?>
          <?php if( $image_content ) { ?>
            <h5 class="image_content text-2xl pt-3 md:pt-0 md:text-2xxl md:leading-normal"><?php echo $image_content; ?></h5>
          <?php }  ?>
        </div>
        <?php if( $hero_image ) { ?>
        <img class="inline-block w-full h-[685px] object-cover" src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
        <?php } ?>
        <?php }  else {?>
      <div class="pl-4 flex flex-col justify-end h-full md:w-2/3 ">
          <?php if( $overlay_title ) { ?>
              <h5 class="image_title text-white font-bold uppercase leading-snug text-sm md:text-base"><?php echo $overlay_title; ?></h5>
          <?php } ?>
          <?php if( $overlay_content ) { ?>
              <h3 class="image_content text-white text-2xl pt-3 md:pt-0 md:text-2xxl md:leading-normal"><?php echo $overlay_content; ?></h3>
          <?php } ?>
      </div>
    <?php } ?>
  </div>

<?php } ?>

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="news_archive py-8 px-5 md:px-11">
    <div class="grid grid-cols-1 gap-10 md:grid-cols-3"> 
        @while(have_posts()) @php(the_post())
          @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
        @endwhile
    </div>
</div>

<div class="pagination">
    {!! 
      the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => '',
        'next_text' => '',
        ) );
    !!}
</div>
@endsection