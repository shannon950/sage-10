<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function header_settings()
    {
      $data = (object) array();

      $data->site_logo = get_field('logo', 'option');
      $data->sticky_header = get_field('sticky_header', 'option');
      $data->scrolled_logo = get_field('scrolled_logo', 'option');
      $data->header_call_to_action = get_field('header_call-to-action', 'option');
      $data->header_width = get_field('header_width', 'option'); //container
      $hamburger_visible = get_field('hamburger_visible', 'option'); //when to display the hamburger menu

      if($hamburger_visible){
        $data->hamburger_visible = 'navbar-expand-'.$hamburger_visible .' p-0 py-'.$hamburger_visible.'-2';
      }else{
        $data->hamburger_visible = 'navbar-expand';
      }

      $data->hamburger_style = get_field('hamburger_style', 'option'); //when to display the hamburger menu

      $header_background_color = get_field('header_background_color','option');
      if($header_background_color != 'transparent'){
        $data->header_background_color = 'has-background has-'.$header_background_color .'-background-color';
      }else{
        $data->header_background_color = '';
      }

      $data->mobile_navigation_layout = get_field('mobile_navigation_layout', 'option');
      if($data->mobile_navigation_layout == 'mobile_layout_offcanvas') {
        $data->off_canvas_position = get_field('off_canvas_position', 'option');
      }else{
        $data->off_canvas_position = '';
      }

      return  $data;
    }
}
