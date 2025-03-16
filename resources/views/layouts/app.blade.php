<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
    <link crossorigin="anonymous"href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" rel="stylesheet"/>
  
      <?php 
      $header_scripts = get_field('google_analytics', 'option'); 
      if($header_scripts): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $header_scripts ?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', '<?php echo $header_scripts ?>');
        </script>
      <?php endif; ?>
  
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
