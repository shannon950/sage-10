<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });


    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'General Settings',
            'menu_title'    => 'General Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

        acf_add_options_page(array(
            'page_title'    => 'Developer Settings',
            'menu_title'    => 'Developer Settings',
            'menu_slug'     => 'theme-developer-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Header Settings',
            'menu_title'    => 'Header',
            'parent_slug'   => 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Footer Settings',
            'menu_title'    => 'Footer',
            'parent_slug'   => 'theme-general-settings',
        ));

    }

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_nav' => __('Main Menu', 'sage'),
        'footer_nav' => __('Footer Menu', 'sage'),
        'footer_nav_one' => __('Footer Menu 1', 'sage'),
        'footer_nav_two' => __('Footer Menu 2', 'sage'),
        'footer_nav_three' => __('Footer Menu 3', 'sage'),
        'custom_menu' => __('Main Hamburger Menu', 'sage'),
        'ham_menu' => __('Sub Hamburger Menu', 'sage'),
    ]);

    /**
 * WP/ACF Colour sync
 * generates the code from the ACF fields to be used within the cloned elements
 */
add_action('acf/save_post', function() {
    $screen = get_current_screen();
    if (strpos($screen->id, 'theme-developer-settings') == true) {

   $text_colors = $bg_colors = $all_colors = $scss_colors = $scss_variables =array();

   $bg_colors[] = $all_colors[] =  'transparent : <i class="far fa-circle" style="color:#323232;" title="transparent"></i>';

   if( have_rows('colours','options') ):
     while( have_rows('colours','options') ): the_row();
       // vars
       $name = get_sub_field('name');
       $slug = get_sub_field('slug');
       $color = get_sub_field('color');
       $text = get_sub_field('text');
       $background = get_sub_field('background');

       if($text){
         $text_colors[] = $slug.' : <i class="fas fa-circle" style="color:'.$color.'" title="'.$name.'"></i>';
       }

       if($background){
         $bg_colors[] = $slug.' : <i class="fas fa-circle" style="color:'.$color.'" title="'.$name.'"></i>';
       }

       $all_colors[] = $slug.' : <i class="fas fa-circle" style="color:'.$color.'" title="'.$name.'"></i>';

       $scss_colors[] = "'".$slug."' : ".$color;

       $scss_variables['brand_'.$slug] = $color;

     endwhile;
   endif;

   $text_color_code = implode(PHP_EOL,$text_colors);
        update_field('acf_colours_text',$text_color_code, 'option' );

   $bg_color_code = implode(PHP_EOL,$bg_colors);
        update_field('acf_colours_bg',$bg_color_code, 'option' );

   $all_color_code = implode(PHP_EOL,$all_colors);
        update_field('acf_colours_all',$all_color_code, 'option' );

   $scss_variables['colors'] = '('.implode(', ',$scss_colors).')';

   $scss_variable_code = '';
   foreach($scss_variables as $key => $value) {
     $scss_variable_code .= '$'.$key.': '.$value.';';
   }




     $fh = fopen(get_theme_file_path() . '/resources/styles/acf.scss', 'w');
     fwrite($fh, $scss_variable_code);
     fclose($fh);
    }
}, 20);

add_action('acf/init', 'my_acf_init');
function my_acf_init() {

    acf_update_setting('google_api_key', 'AIzaSyDvTuh06GNBtUytUapx_QFanFnbwFjESV4');

    // check function exists
    if( function_exists('acf_register_block') ) {

        // register a cta block
        acf_register_block(array(
            'name'              => 'cta',
            'title'             => __('CTA Block'),
            'description'       => __('A custom call to action block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'cta', 'call to action' ),
        ));

                // register a text block
                acf_register_block(array(
                    'name'              => 'text',
                    'title'             => __('Text Block'),
                    'description'       => __('A custom text block.'),
                    'render_callback'   => 'my_acf_block_render_callback',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                    'keywords'          => array( 'text block' ),
                ));

                            // register a intro text block
                            acf_register_block(array(
                                'name'              => 'introtext',
                                'title'             => __('Intro Text Block'),
                                'description'       => __('A custom text block.'),
                                'render_callback'   => 'my_acf_block_render_callback',
                                'category'          => 'formatting',
                                'icon'              => 'admin-comments',
                                'keywords'          => array( 'intro text block' ),
                            ));

                // register a text/image block
                acf_register_block(array(
                    'name'              => 'textimage',
                    'title'             => __('Text/Image Block'),
                    'description'       => __('A custom text and image block.'),
                    'render_callback'   => 'my_acf_block_render_callback',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                    'keywords'          => array( 'text, image, content' ),
                ));

                               // register a form block
                               acf_register_block(array(
                                'name'              => 'formblock',
                                'title'             => __('Form Block'),
                                'description'       => __('A custom form block.'),
                                'render_callback'   => 'my_acf_block_render_callback',
                                'category'          => 'formatting',
                                'icon'              => 'admin-comments',
                                'keywords'          => array( 'form, gravity forms, contact' ),
                            ));

                                           // register a carousel block
                acf_register_block(array(
                    'name'              => 'carousel',
                    'title'             => __('Carousel Block'),
                    'description'       => __('A carousel block.'),
                    'render_callback'   => 'my_acf_block_render_callback',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                    'keywords'          => array( 'carousel, images, slider' ),
                ));

                               // register a hero block
                               acf_register_block(array(
                                'name'              => 'hero',
                                'title'             => __('Hero Block'),
                                'description'       => __('A custom hero block.'),
                                'render_callback'   => 'my_acf_block_render_callback',
                                'category'          => 'formatting',
                                'icon'              => 'admin-comments',
                            ));

                                           // register a map block
                acf_register_block(array(
                    'name'              => 'mapblock',
                    'title'             => __('Map Block'),
                    'description'       => __('A custom map block.'),
                    'render_callback'   => 'my_acf_block_render_callback',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                ));

                // register a latest news block
                acf_register_block(array(
                    'name'              => 'latestnews',
                    'title'             => __('Latest News Block'),
                    'description'       => __('A custom block to showcase the latest news.'),
                    'render_callback'   => 'my_acf_block_render_callback',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                ));

                                           // register a products and services block
                acf_register_block(array(
                    'name'              => 'productsandservices',
                    'title'             => __('Products & Services Block'),
                    'description'       => __('A custom text block.'),
                    'render_callback'   => 'my_acf_block_render_callback',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                ));

                // register a content cards block
                acf_register_block(array(
                'name'              => 'contentcards',
                'title'             => __('Content Cards Block'),
                'description'       => __('A custom content cards block.'),
                'render_callback'   => 'my_acf_block_render_callback',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
            ));

            // register a Product Services List block
            acf_register_block(array(
                'name'              => 'productserviceslist',
                'title'             => __('Product Services List'),
                'description'       => __('A custom Product Services List block.'),
                'render_callback'   => 'my_acf_block_render_callback',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
            ));

            // register a content cards carousel block
            acf_register_block(array(
                'name'              => 'contentcardscarousel',
                'title'             => __('Content Cards Carousel Block'),
                'description'       => __('A custom content cards carousel block.'),
                'render_callback'   => 'my_acf_block_render_callback',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
            ));

                        // register aaccreditations block
                        acf_register_block(array(
                            'name'              => 'accreditations',
                            'title'             => __('Accreditations Block'),
                            'description'       => __('An accreditations block.'),
                            'render_callback'   => 'my_acf_block_render_callback',
                            'category'          => 'formatting',
                            'icon'              => 'admin-comments',
                        ));
    }
}

function my_acf_block_render_callback( $block ) {

    // convert name ("acf/block") into path friendly slug ("block")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/resources/views/blocks/block-{$slug}.php") ) ) {
        include( get_theme_file_path("/resources/views/blocks/block-{$slug}.php") );
    }

}

add_shortcode( 'locations_map', 'locations_map' );

// filter the Gravity Forms button type
add_filter("gform_submit_button_1", "form_submit_button", 10, 2);
    function form_submit_button($button, $form){
    $arrow_image = asset('/images/svg/arrow-white.svg');
    return "<button class='button flex items-center' id='gform_submit_button_{$form["id"]}'>Send<img class='inline-block h-4 w-4' src='{$arrow_image}' alt='right facing white arrow' /></button>";
}


add_filter( 'wp_nav_menu_objects', 'mytheme_menufilter', 10, 2 );
function mytheme_menufilter($items, $args) {
    // want our MAINMENU to have MAX of 7 items
    if ( $args->theme_location == 'primary_nav' ) {
        $toplinks = 0;
        foreach ( $items as $k => $v ) {
            if ( $v->menu_item_parent == 0 ) {
                // count how many top-level links we have so far...
                $toplinks++;
            }
            // if we've passed our max # ...
            if ( $toplinks > 6 ) {
                unset($items[$k]);
            }
        }
    }
    return $items;
}

/**

 * fontawesome

 * @string [type] [description]

 */

 add_action('admin_init', function() {

    wp_enqueue_style('fontawesome-dashboard', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css');

    add_editor_style('https://use.fontawesome.com/releases/v5.13.0/css/all.css');

  }, 100);

  if ( SITECOOKIEPATH != COOKIEPATH ) {
      setcookie(TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN);
  }


  add_action('map_meta_cap', function($caps, $cap, $user_id, $args) {
    $user_meta = get_userdata($user_id);
    
    if (!$user_meta) {
        return $caps;
    }

    if ('manage_privacy_options' !== $cap) {
        return $caps;
    }
    
    if (!array_intersect(['editor', 'administrator'], $user_meta->roles)) {
        return $caps;
    }

    $manage_name = is_multisite() ? 'manage_network' : 'manage_options';
    $caps = array_diff($caps, [ $manage_name ]);
    return $caps;
}, 1, 4);