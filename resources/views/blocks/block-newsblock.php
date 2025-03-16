{{--
  Title: Post Grid
  Description: Pull in content.
  Category: posts
  Icon: schedule
  Keywords: post grid
  Align: full
  Mode: preview
--}}

@php

  $grid_content = get_field('grid_content');

  if($grid_content == 'specific'){
    $selected_posts = get_field('selected_posts');
  }elseif($grid_content == 'feed'){
    $post_type_feed = get_field('post_type_feed');
    $taxonomy = get_field('taxonomy');
    $number = get_field('number');
    $order = get_field('order');

    $order_exploded = explode('-',$order);

    $args = array(
      'post_type'     => $post_type_feed,
      'posts_per_page' => $number,
      'orderby'			=> $order_exploded[0],
      'order'				=> $order_exploded[1],
    );

    $feed_filter = get_field('feed_filter');

    switch($feed_filter){
      case 'children' :
        $parent_page = App\get_acf_post_id();
        $args['post_parent'] = $parent_page;
      break;
      case 'siblings' :
        $parent_page = wp_get_post_parent_id(App\get_acf_post_id());
        $args['post_parent'] = $parent_page;
      break;
      case 'other' :
        $parent_page = get_field('parent_page', false, false);
        $args['post_parent'] = $parent_page;
      break;
      case 'taxonomy' :
        if(!empty($taxonomy)){
          $args['category'] = $taxonomy;
        }
      break;
    }

    $selected_posts = get_posts($args);

  }elseif($grid_content == 'specific_tax'){
    $selected_taxonomy = get_field('selected_taxonomy');
  }elseif($grid_content == 'manual') {
    $selected_posts = get_field('manual_posts');
  }

  $override_css = get_field('override_css');

  if(empty($override_css)){

    $mobile_columns = get_field('mobile_columns');
    if($mobile_columns){
      switch($mobile_columns){
        case '2' : $col_css = 'col-6 '; break;
        case '3' : $col_css = 'col-4 '; break;
        case '4' : $col_css = 'col-13 '; break;
        default :  $col_css = 'col-12 '; break;
      }
    }else{
      $col_css = 'col-12 ';
    }

    $tablet_columns = get_field('tablet_columns');
    if($tablet_columns){
      switch($tablet_columns){
        case '2' : $col_css .= 'col-sm-6 '; break;
        case '3' : $col_css .= 'col-sm-4 '; break;
        case '4' : $col_css .= 'col-sm-3 '; break;
        default :  $col_css .= 'col-sm-6 '; break;
      }
    }else{
      $col_css .= 'col-sm-6 ';
    }

    $columns = get_field('columns');
    if($columns){
      switch($columns){
        case '2' : $col_css .= 'col-md-6 '; break;
        case '3' : $col_css .= 'col-md-4 '; break;
        case '4' : $col_css .= 'col-md-3 '; break;
        default :  $col_css .= 'col-md-6 '; break;
      }
    }else{
      $col_css .= 'col-md-6 ';
    }

  }else{
    $col_css = $override_css;
  }

  $display_title = get_field('display_title');
  $display_images = get_field('display_images');
  $display_summary = get_field('display_summary');
  $vertical_align = get_field('vertical-align');
  $gutters = get_field('gutters');

  $disable_link_to_post = get_field('disable_link_to_post');
  $image_style = get_field('image_style');

  $background_colour = get_field('background_colour');

  $block_title = get_field('block_title');
  $block_intro = get_field('block_intro');

  $content_alignment = get_field('content_alignment');
  if($content_alignment){
    $content_alignment = 'text-'.$content_alignment;
  }

  $title_alignment = get_field('title_alignment');
  if($title_alignment){
    $title_alignment = 'text-'.$title_alignment.' has-text-align-'.$title_alignment;
  }else{
    $title_alignment = 'text-center has-text-align-center';
  }

  $content_outline = get_field('content_outline');

  $collapse_content = get_field('collapse_content');

  if($content_outline){
    $content_outline = 'outlined';
  }else{
    $content_outline = '';
  }

  $content_header_underline = get_field('content_header_underline');

  $text_colour = get_field('text_colour');
  $overlay_text_colour = get_field('overlay_text_text_colour');

  $inject_first_item = get_field('inject_first_item');
  $first_item = get_field('first_item');

  $fallback_image = get_field('post_fallback_listing_image','options')['sizes']['large'];

  $title_link = get_field('title_link');

  if($disable_link_to_post){
    $show_fom_hover = 0;
  }else{
    $show_fom_hover = 1;
  }

  // New fields
  $grid_content = get_field('grid_content');

@endphp

<div id="post-grid-{{$block['id']}}" class="post-grid  {{$block['classes']}} d-flex justify-content-center align-items-center align-content-center flex-wrap" >
  @if($block['align'] == 'wide')
   <div class="container">
  @endif
  <div class="row grid-row w-100">
    @foreach($grid_content as $item)
      @if($item['content_type'] == 'custom')
      <div class="d-flex align-items-center justify-content-center col-6 col-xl-4 p-3 p-lg-5 bg-{{$item['background_color']}}">
        {!! $item['custom_content'] !!}
      </div>
      @else
      <div class="d-flex col-6 col-xl-4 p-0 bg-{{$item['background_color']}}">
        <a href="{!! $item['page_link']['url'] !!}" class="d-flex w-100 h-100 align-items-center justify-content-center grid-link" style="background-image: url({!! $item['background_image']['sizes']['large'] !!});">
          {!! $item['page_link']['title'] !!}
        </a>
      </div>
      @endif
    @endforeach
  </div>
  @if($block['align'] == 'wide')
  </div>
  @endif
</div>

{{-- Old content
<div id="post-grid-{{$block['id']}}" class="post-grid @if($show_fom_hover) fom-hover @endif {{$block['classes']}} bgimg-{{$image_style}} d-sm-flex justify-content-center align-items-center align-content-center flex-wrap @if($collapse_content) has-collapse position-relative py-2 @else py-5 @endif height-{{get_field('height')}} locks bg-{{$background_colour}}" >
  @if($block['align'] == 'wide')
   <div class="container">
  @else
   <div class="container">
  @endif
    @if($block_title)
      <div class="block_title {{$title_alignment}} text-{{$text_colour }}">
        @if($collapse_content)
          <h2><a data-toggle="collapse" href="#collapse{{$block['id']}}" role="button" aria-expanded="false" aria-controls="collapse{{$block['id']}}" class="text-blue collapsed text-{{$text_colour }} stretched-link">{{$block_title}}</a></h2>
        @elseif($title_link)
          <h2><a href="{{$link['url']}}" class="text-blue text-{{$text_colour }}">{{$block_title}} <i class="align-text-bottom fas fa-chevron-right fa-xs mb-1 ml-1"></i></a></h2>
        @else
          <h2>{{$block_title}}</h2>
        @endif
      </div>
    @endif
    @if($collapse_content)
    <div class="collapse" id="collapse{{$block['id']}}">
    @endif
    @if($block_intro)
      <div class="block_intro mb-5 text-{{$text_colour }}">{!!$block_intro!!}</div>
    @endif
    <div class="row {{$gutters}}">
      @if($inject_first_item == 'yes')
        @php
          $injected_post = get_field('injected_post');
          $post_title = '<div class="h4 text-'.$overlay_text_colour.'"><a class="stretched-link" href="'.$injected_post['post_link']['url'].'">'.$injected_post['post_title'].'</a></div>';
          $post_excerpt = wp_trim_words( ($inject_first_item['post_summary']?$injected_post['post_summary']:''), 50, '...' );
          $post_url = $injected_post['post_link']['url'];
        @endphp
        <div class="has-post-thumbnail {{$col_css}} @if($gutters) @else mb-4 @endif ">
          <div class="post_grid_item @if($content_outline) {{$content_outline}} @endif">
              <div class="summary_below  text-blue text-{{$text_colour }}  @if($background_colour && $background_colour != 'transparent') pl-3 @endif {{$content_alignment}} @if($content_outline) py-1 px-4 @endif">
                @if($display_title == 'below')
                  <div class="post_title header_underline py-1 h4">{!!$post_title!!}</div>
                @endif
                @if($display_summary == 'below')
                  <div class="post_summary entry-summary p-2">{!!$post_excerpt!!}</div>
                @endif
              </div>
          </div>
        </div>
      @endif
      @if($selected_posts)
        @foreach($selected_posts as $grid_post)
          @php
            $temp_col_css = $col_css;
            $sub_col_css = $sub_img_col_css = $link_target = '';

            if($first_item == 'one_column' && $loop->first && $inject_first_item != 'yes'){
              $col_css = 'col-12 full-width-post';
              $sub_col_css = 'col-8 d-block';
              $sub_img_col_css = 'col-4';
            }

            if($grid_content == 'manual'){

              $post_url = $grid_post['post_link']['url'];
              $post_excerpt = get_the_excerpt($grid_post->ID);
              $post_image_url = $grid_post['post_image']['sizes']['large'];
              $post_text_title = $grid_post['post_title'];

            }else{

              $post_url = get_permalink($grid_post->ID);
              $post_excerpt = get_the_excerpt($grid_post->ID);
              $post_image_url = get_the_post_thumbnail_url( $grid_post->ID, 'large' );
              $post_text_title = $grid_post->post_title;

            }

            if(get_post_type($grid_post->ID) == 'partner'){
              $link = get_field('partner_url',$grid_post->ID);
              $post_url = $link['url'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              $disable_link_to_post = '';

              if($display_title == 'none'){
                $partner_link = '<a class="stretched-link" href="'.$post_url.'" target="'.esc_attr( $link_target ).'" title="'.esc_attr( $link['title'] ).' | '.esc_attr( $post_url ).'"></a>';
              }
            }

            if($disable_link_to_post){
              $post_title = '<div class="h4 text-'.$overlay_text_colour.'">'.$post_text_title.'</div>';
            }else{
              $post_title = '<div class="h4 text-'.$overlay_text_colour.'"><a class="stretched-link" href="'.$post_url.'" '.$link_target.'>'.$post_text_title.'</a></div>';
            }

            if($disable_link_to_post){
              $post_url = null;
            }

            if(empty($post_image_url)){
              $post_image_url = $fallback_image;
            }

            if(get_post_type( $grid_post->ID ) == 'document'){
              $post_file = get_field('file',$grid_post->ID);

              if($post_file){
                $post_url = $post_file;
                $post_title = '<div class="h4 text-'.$overlay_text_colour.'"><a class="stretched-link" target="_blank" href="'.$post_url.'">'.$grid_post->post_title.'</a></div>';
              }
            }

          @endphp

          <div class="has-post-thumbnail @if($post_url) hover-image @endif {{$col_css}} @if($gutters) @else mb-4 @endif ">
            @if($sub_col_css) <div class="container-fluid2 mb-5"> @endif
            <div class="post_grid_item @if($content_outline) {{$content_outline}} @endif ">
              @if($display_images != 'none' || empty($display_images))
                @if($sub_col_css) <div class="row"><div class="{{$sub_col_css}}"> @endif
                <div class="d-block position-relative hover-image image-4x3 loop-image post-img" style="background-image:url({{ $post_image_url }});">
                  @if($display_title == 'top' || $display_summary == 'top' || $display_title == 'hover' || $display_summary == 'hover')
                    <div class="h-100 position-absolute p-4 d-flex {{$vertical_align}} image-content mask">
                      <div class="w-100 summary_top {{$content_alignment}}">
                        @if($display_title == 'hover' || $display_title == 'top')
                          <div class="overlay_title display_{{$display_title}} @if($content_header_underline) header_underline @endif">{!!$post_title!!}</div>
                        @endif
                        @if($display_summary == 'hover' || $display_summary == 'top')
                          <div class="post_summary entry-summary text-{{$overlay_text_colour}} display_{{$display_summary}}">{!!$post_excerpt!!}</div>
                        @endif
                      </div>
                    </div>
                  @endif
                </div>
                @if($sub_col_css) </div> @endif
              @endif
              @if($display_title == 'below' || $display_summary == 'below')
                <div class="summary_below {{$sub_img_col_css}} text-blue text-{{$text_colour }}  @if($background_colour && $background_colour != 'transparent') pl-3 @endif {{$content_alignment}} @if($content_outline) py-1 px-4 @endif">
                  @if($display_title == 'below')
                    <div class="post_title px-2 @if($content_header_underline) header_underline py-1 @else py-1 @endif">{!!$post_title!!}</div>
                  @endif
                  @if($display_summary == 'below')
                    <div class="post_summary entry-summary py-2 px-2">{!!$post_excerpt!!}</div>
                  @endif
                </div>
              @else
                @php /* need this as UI in Admin not working */ @endphp
                <div class="summary_below_cleaner"></div>
              @endif
              @if($sub_col_css) </div></div> @endif
            </div>
            {!! $partner_link !!}
          </div>
          @php
            $col_css = $temp_col_css;
          @endphp
        @endforeach
      @endif
      @if($selected_taxonomy)
        @foreach($selected_taxonomy as $term)
          @php
            $post_title = '<a class="stretched-link" href="'.get_term_link( $term ).'">'.$term->name.'</a>';

            $post_excerpt = get_the_excerpt($term->term_id);
            $post_image_url = get_field('charter_type_thumbnail',  $term)['sizes']['large'];

            if(empty($post_image_url)){
              $post_image_url = $fallback_image;
            }

          @endphp
          <div class="{{$col_css}} {{$content_outline}}">
            <div class="post_grid_item h-100 bg-{{$background_colour}}">
              <div class="d-block position-relative image-4x3 loop-image" href="{{ get_term_link( $term ) }}" style="background-image:url({{ $post_image_url }});">
                @if($display_title == 'top' || $display_summary == 'top' || $display_title == 'hover' || $display_summary == 'hover')
                  <div class="position-absolute d-flex {{$vertical_align}} image-content mask">
                    <div class="summary_top {{$content_alignment}}">
                      @if($display_title == 'hover' || $display_title == 'top')
                        <div class="overlay_title display_{{$display_title}} @if($content_header_underline) header_underline @endif">{!!$post_title!!}</div>
                      @endif
                      @if($display_summary == 'hover' || $display_summary == 'top')
                        <div class="post_summary entry-summary display_{{$display_summary}}">{!!$post_excerpt!!}</div>
                      @endif
                    </div>
                  </div>
                @endif
              </div>
              @if($display_title == 'below' || $display_summary == 'below')
                <div class="summary_below px-2 @if($background_colour && $background_colour != 'transparent') @endif {{$content_alignment}}">
                  @if($display_title == 'below')
                    <div class="post_title @if($content_header_underline) header_underline pt-1 pb-1 @else py-1 @endif">{!!$post_title!!}</div>
                  @endif
                  @if($display_summary == 'below')
                    <div class="post_summary entry-summary py-2">{!!$post_excerpt!!}</div>
                  @endif
                </div>
              @else
                @php /* need this as UI in Admin not working */ @endphp
                <div class="summary_below_cleaner"></div>
              @endif
            </div>
          </div>
        @endforeach
      @endif
    </div>
    @if($collapse_content)
    </div>
    @endif
  </div>
</div>
--}}
