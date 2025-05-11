
  @php

  $main_logo = get_field('logo', 'option');

  $hamburger_settings = get_field('hamburger_menu_settings', 'option');

  @endphp



<header class="banner px-5 md:px-11 py-3 md:py-5">
  <div class="flex justify-between items-center">
    <!-- Logo -->
      <a class="brand" href="{{ home_url('/') }}" aria-label="navigate to home page">
        <img class="max-h-10 object-contain md:max-h-16" src="<?php echo esc_url($main_logo['url']); ?>" alt="<?php echo esc_attr($main_logo['alt']); ?>" />
      </a>

    <div class="flex items-center">
      <!-- Main Navigation -->
      <div id="primary-nav-container">
        @if (has_nav_menu('primary_nav'))
          <nav class="nav-primary md:px-4 lg:px-8 text-sm lg:text-base hidden md:!block" aria-label="{{ wp_get_nav_menu_name('primary_nav') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_nav', 'menu_class' => 'nav', 'echo' => false]) !!}
          </nav>
        @endif
      </div>

      <!-- Hamburger Button -->
      <div id="hamburger-container" class="hamburger_menu">
          <button id="hamburger-button"  class="navbar-toggler hamburger flex flex-col justify-between cursor-pointer items-center" type="button" data-toggle="modal" data-target="#menuModal" aria-label="toggle hamburger menu">
              <div class="h-0.5 mb-0.5 bg-blue w-16 md:w-20 transition-transform transform topline"></div>
              <div class="h-0.5 mt-0.5 bg-blue w-16 md:w-20 transition-transform transform bottomline"></div>
          </button>
      </div>
    </div>
  </div>

  <!-- Hamburger Dropdown Menu-->
  <div id="hamburger-dropdown-menu" class="py-5 hidden">
    <div class="flex flex-col-reverse md:flex-row "> 
      <div class="sub_menu left w-full md:w-1/2 pt-8 md: pr-2 md:pt-0 left-menu-container">
        @if( $hamburger_settings['left_menu_title'] )
          <div class="menu">
            <h4 class="!font-bold">@php echo $hamburger_settings['left_menu_title'] @endphp</h4>
            <div class="business-list" >@php echo $hamburger_settings['left_side_menu'] @endphp</div>
          </div>
        @endif
      </div>
      
      <div class="sub_menu right w-full md:w-1/2">
        @if( $hamburger_settings['main_hamburger_menu'] )
            <div class="menu">
              @php echo $hamburger_settings['main_hamburger_menu'] @endphp
          </div>
        @endif
      </div>
    </div>
  </div>

</header>

<script>
    const arrowIconUrl = "<?php echo asset('/images/svg/arrow-black.svg'); ?>"; // define the URL to be used in header.js
</script>


<header class="banner">    
  <div class="desktop-menu-group hidden lg:block">
    <div class="desktop-menu">
      <nav class="navbar navbar-expand-lg navbar-background">
        <div class="container">
          <div class="header-logo">
            <a class="brand" href="{{ home_url('/') }}" aria-label="navigate to home page">
              <div class="logo" style="background: url(' https://gtssecurity.co.uk/wp-content/uploads/2024/10/gts-logo.svg') no-repeat center center; background-size: contain;"></div>

                            
                        </a>
                        <div class="gts-call-us-now">
                            <p>
                                <a href="tel:0116 296 6068"><i class="fa-solid fa-phone"></i>Call us now:</a>
                            </p>
                            <a href="tel:0116 296 6068">0116 296 6068</a>
                        </div>
                    </div> 

                    <div class="menu-header-top-container">

                        <div class="menu-primary-menu-container"><ul id="menu-primary-menu" class="navbar-nav" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement"><li id="menu-item-317" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-317 nav-item"><a href="/services/" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-317"><span itemprop="name">Services</span>
        <div class="dropdown-icon" data-bs-toggle="dropdown">
            <i class="fa-solid fa-caret-down"></i>
        </div>
    </a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-317">
	<li id="menu-item-914" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-914 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/key-holding-alarm-response/" class="dropdown-item"><span itemprop="name">Key Holding &amp; Alarm Response</span></a></li>
	<li id="menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-919 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/mobile-patrols/" class="dropdown-item"><span itemprop="name">Mobile Patrols</span></a></li>
	<li id="menu-item-917" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-917 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/locking-unlocking/" class="dropdown-item"><span itemprop="name">Locking &amp; Unlocking</span></a></li>
	<li id="menu-item-921" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-921 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/security-dog-unit/" class="dropdown-item"><span itemprop="name">Security Dog Unit</span></a></li>
	<li id="menu-item-918" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-918 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/manned-guarding-reception/" class="dropdown-item"><span itemprop="name">Manned Guarding &amp; Reception</span></a></li>
	<li id="menu-item-920" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-920 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/property-inspections/" class="dropdown-item"><span itemprop="name">Void Property Inspections (VPI)</span></a></li>
	<li id="menu-item-915" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-915 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/apartment-blocks/" class="dropdown-item"><span itemprop="name">Apartment Blocks</span></a></li>
	<li id="menu-item-916" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-916 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/bespoke-services/" class="dropdown-item"><span itemprop="name">Bespoke Services</span></a></li>
</ul>
</li>
<li id="menu-item-334" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-334 nav-item"><a href="/sectors/" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-334"><span itemprop="name">Sectors</span>
        <div class="dropdown-icon" data-bs-toggle="dropdown">
            <i class="fa-solid fa-caret-down"></i>
        </div>
    </a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-334">
	<li id="menu-item-628" class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-628 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/private-residence/" class="dropdown-item"><span itemprop="name">Private Residence</span></a></li>
	<li id="menu-item-627" class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-627 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/landlords-apartments-student-accommodation/" class="dropdown-item"><span itemprop="name">Landlords, Apartments &amp; Student Accommodation</span></a></li>
	<li id="menu-item-626" class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-626 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/business-site-security/" class="dropdown-item"><span itemprop="name">Business &amp; Site Security</span></a></li>
	<li id="menu-item-625" class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-625 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/educational-establishments/" class="dropdown-item"><span itemprop="name">Educational Establishments</span></a></li>
	<li id="menu-item-624" class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-624 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/local-authorities/" class="dropdown-item"><span itemprop="name">Local Authorities</span></a></li>
</ul>
</li>
<li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-300 nav-item"><a href="https://gtssecurity.co.uk/about/" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-300"><span itemprop="name">About</span>
        <div class="dropdown-icon" data-bs-toggle="dropdown">
            <i class="fa-solid fa-caret-down"></i>
        </div>
    </a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-300">
	<li id="menu-item-623" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/about/" class="dropdown-item"><span itemprop="name">About GTS</span></a></li>
	<li id="menu-item-622" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-622 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/about/accreditations/" class="dropdown-item"><span itemprop="name">Training &amp; Accreditations</span></a></li>
</ul>
</li>
<li id="menu-item-335" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-335 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/advice/" class="nav-link"><span itemprop="name">Advice</span></a></li>
<li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/news/" class="nav-link"><span itemprop="name">News</span></a></li>
<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/contact/" class="nav-link"><span itemprop="name">Contact</span></a></li>
</ul></div>
                                                <a href="#" id="search-toggle" class="search-toggle nav-link" @click="searchIsOpen = true;  $nextTick(() => { document.querySelector('#search-input').focus(); });">
                            <i class=" fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="/get-free-quote/" class="btn btn-1">Get free quote</a>

                    </div> 
                </div>             </nav>         </div>     </div> 

    <div class="mobile-menu-group d-lg-none">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <div class="header-logo">
                    <a href="https://gtssecurity.co.uk">

                        
                        
                            <div class="brand-image" style="background: url(' https://gtssecurity.co.uk/wp-content/uploads/2024/10/gts-logo.svg') no-repeat center center; background-size: contain;"></div>

                        
                    </a>
                </div> 

                <div class="navbar-group">
                    <!-- Search button -->
                    <a href="#" id="search-toggle" class="search-toggle nav-link" @click="searchIsOpen = true;  $nextTick(() => { document.querySelector('#search-input').focus(); });">
                        <i class=" fa-solid fa-magnifying-glass"></i>
                    </a>

                    <!-- Mobile nav toggle -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="https://gtssecurity.co.uk/wp-content/themes/insight-theme/assets/img/navbar-toggler.svg" alt="Toggle navigation" class="navbar-toggler-icon-closed">
                        <!-- Or use a fontawesome burger bar menu icon instead -->
                        <i class="navbar-toggler-icon-open fa-solid fa-xmark"></i>
                    </button>
                </div>

                <!-- nav -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">

                    <!-- Mobile menu 1 (Main menu from desktop) -->
                    <div class="menu-primary-menu-container"><ul id="menu-primary-menu-1" class="navbar-nav" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-317 nav-item"><a href="/services/" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-317"><span itemprop="name">Services</span></a>
		<div class="dropdown-icon dropdown-toggle" data-bs-toggle="dropdown">
            <i class="fa-solid fa-caret-down"></i>
        </div>
    
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-317">
	<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-914 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/key-holding-alarm-response/" class="dropdown-item"><span itemprop="name">Key Holding &amp; Alarm Response</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-919 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/mobile-patrols/" class="dropdown-item"><span itemprop="name">Mobile Patrols</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-917 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/locking-unlocking/" class="dropdown-item"><span itemprop="name">Locking &amp; Unlocking</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-921 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/security-dog-unit/" class="dropdown-item"><span itemprop="name">Security Dog Unit</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-918 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/manned-guarding-reception/" class="dropdown-item"><span itemprop="name">Manned Guarding &amp; Reception</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-920 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/property-inspections/" class="dropdown-item"><span itemprop="name">Void Property Inspections (VPI)</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-915 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/apartment-blocks/" class="dropdown-item"><span itemprop="name">Apartment Blocks</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-916 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/service/bespoke-services/" class="dropdown-item"><span itemprop="name">Bespoke Services</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-334 nav-item"><a href="/sectors/" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-334"><span itemprop="name">Sectors</span></a>
		<div class="dropdown-icon dropdown-toggle" data-bs-toggle="dropdown">
            <i class="fa-solid fa-caret-down"></i>
        </div>
    
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-334">
	<li class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-628 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/private-residence/" class="dropdown-item"><span itemprop="name">Private Residence</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-627 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/landlords-apartments-student-accommodation/" class="dropdown-item"><span itemprop="name">Landlords, Apartments &amp; Student Accommodation</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-626 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/business-site-security/" class="dropdown-item"><span itemprop="name">Business &amp; Site Security</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-625 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/educational-establishments/" class="dropdown-item"><span itemprop="name">Educational Establishments</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-sector menu-item-624 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/sector/local-authorities/" class="dropdown-item"><span itemprop="name">Local Authorities</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-300 nav-item"><a href="https://gtssecurity.co.uk/about/" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-300"><span itemprop="name">About</span></a>
		<div class="dropdown-icon dropdown-toggle" data-bs-toggle="dropdown">
            <i class="fa-solid fa-caret-down"></i>
        </div>
    
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-300">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/about/" class="dropdown-item"><span itemprop="name">About GTS</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-622 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/about/accreditations/" class="dropdown-item"><span itemprop="name">Training &amp; Accreditations</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-335 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/advice/" class="nav-link"><span itemprop="name">Advice</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/news/" class="nav-link"><span itemprop="name">News</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320 nav-item"><a itemprop="url" href="https://gtssecurity.co.uk/contact/" class="nav-link"><span itemprop="name">Contact</span></a></li>
</ul></div>


                </div>             </div>
    </nav></div>
    


     <!-- end Mobile nav -->

    <form role="search" method="get" action="https://gtssecurity.co.uk" id="search-form" class="search-form search-form-overlay" x-show="searchIsOpen" x-transition="" @keyup.esc="searchIsOpen = false" style="display: none;">

    <div class="search-content-wrap">
        <div id="search-close" class="search-close" @click="searchIsOpen = false">
            <h2 class="search-title">Search by term:</h2>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>


        <div class="search-content" @click.away="searchIsOpen = false" x-data="alpineInstance()">

            <div class="input-group search-box">

                <input class="form-control rounded-0" type="text" name="s" id="search-input" placeholder="Start typing..." required="" autocomplete="off" x-model="searchTerm" x-on:input.debounce.300ms="searchTerm.length > 0 &amp;&amp; searchPosts()">

                <div class=" input-group-append">
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </div>

            </div>

            <!-- begin: search results -->
            <div class="search-results-list">
                <template x-for="post in posts" :key="post.id">
                    <a class="search-results-item" x-bind:href="post.link">
                        <span class="search-results-item-title" x-html="post.title"></span>
                        <span class="search-results-item-badge" x-html="post.type"></span>
                    </a>
                </template>

                <button type="submit" class="search-details btn" x-show="total" tabindex="0" style="display: none;">
                    Show more (<span x-text="total">0</span>&nbsp;results)
                </button>
            </div>
            <!-- end: search results -->

        </div>
    </div>
</form>


<script>
    // Fetch API Search
    function alpineInstance() {
        return {
            searchTerm: '', // Initialise the search term
            posts: [],
            total: 0,
            searchPosts() {
                fetch(`https://gtssecurity.co.uk/wp-admin/admin-ajax.php?action=search_results&search_term=${this.searchTerm}`)
                    .then(response => response.json())
                    .then(data => {
                        this.posts = data[0];
                        this.total = data[1];
                    })
                    .catch(error => {
                        console.error('Error fetching search results:', error);
                    });
            }
        };
    }

    // Dispatch a custom event to toggle the search model when Ctrl + / OR Cmd + / is pressed
    function handleKeyToggle(event) {
        if ((event.ctrlKey || event.metaKey) && event.key === "/") {

            const customEvent = new CustomEvent("toggle-search", {
                bubbles: true,
                detail: {
                    keyCombination: "Ctrl + / (or Cmd + /)",
                },
            });

            document.dispatchEvent(customEvent);

            event.preventDefault();
        }
    }
    document.addEventListener("keydown", handleKeyToggle);
</script>
</header>
    <div class="banner-section">
        <div class="container banner-container">
            <div class="banner-content">

                


            </div> 
        </div>     </div>

</section>