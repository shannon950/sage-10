{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    <?php 
      $main_title = get_field('main_title');
      $content = get_field('content'); 
      $docs = get_field('downloadable_documents');

      $index = 0;
    ?>
    <div class="intro_copy px-6 py-6 md:px-16 lg:px-40 xl:px-56">
      <p class="intro_paragraph pb-4 !text-black/80 font-bold leading-snug md:text-lg"><?php echo $main_title; ?></p>
      <p class="!text-black/80 leading-snug md:text-lg"><?php echo $content; ?></p>
    </div>


    <?php $blog_details = get_blog_details(get_current_blog_id()); ?>
      <script>
        console.log("Current Blog ID: <?php echo $blog_details->id; ?>");
      </script>
      <?php if ($blog_details->id == 8): ?>
      <?php elseif ($blog_details->id == 7): ?>
        <!-- <iframe allowtransparency="true" frameborder="0" id="gnewtonIframe" scrolling="yes" src="https://recruitingbypaycor.com/career/iframe.action?clientId=8a7883d07a219b0d017a543bf6a0109e" width="100%" style="overflow: hidden; height: 881px;"></iframe>  -->
      <?php elseif ($blog_details->id == 9 || $blog_details->id == 13): ?>
          <iframe allowtransparency="true" frameborder="0" id="gnewtonIframe" scrolling="yes" src="https://recruitingbypaycor.com/career/CareerHome.action?clientId=8a7883d07c5da337017cce0be35f778b&amp;parentUrl=https%3A%2F%2Fwww.lonestargroup.com%2Fen%2Fworking-for-lonestar&amp;gns=" width="100%" style="overflow: hidden; height: 881px;"></iframe>
      <!-- <iframe allowtransparency="true" frameborder="0" id="gnewtonIframe" scrolling="yes" src="https://recruitingbypaycor.com/career/iframe.action?clientId=8a7883d07a219b0d017a543bf6a0109e" width="100%" style="overflow: hidden; height: 881px;"></iframe> -->
      <?php endif; ?>

      <div class="downloads px-6 py-6 md:px-16 lg:px-40 xl:px-56">
      <?php if( $docs ) { ?>
        <h3 class="download_title font-bold leading-snug">Downloadable Documents</h3>
        <hr class="w-full text-grey my-4 flex self-center"></hr>
          <?php foreach( $docs as $doc ) { ?>
              <div class="document flex justify-between pb-2">
                  <h3 class="title leading-snug"><?php echo $doc['document_title']; ?></h3>
                  <a class="download text-blue" href="<?php echo $doc['document']['url'] ?>" target="_blank">
                      <button class="cta_btn flex justify-between items-center" aria-label="view pdf">
                        <div class="inline-block pr-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                            <g id="Interface / Download">
                              <path id="Vector" d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#0072BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                          </svg>
                        </div>
                        PDF
                      </button>
                  </a>
              </div>
          <?php } 
      } ?>
    </div>
  
  @endwhile
@endsection