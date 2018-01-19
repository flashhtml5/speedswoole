<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html>
<html lang="cn">
  <head>
    <title>GameSoftApp - 好软件都在这里找</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!-- @todo: fill with your company info or remove -->
    <meta name="description" content="">
    <meta name="author" content="Themelize.me">
    
    <!-- Bootstrap v4.0.0-beta.3 CSS via CDN -->
    <link rel="stylesheet" href="/i/assets/css/bootstrap.min.css">
    
    <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->
    
    <!-- Theme style -->
    <link href="/i/assets/css/theme-style.min.css" rel="stylesheet">
    
    <!--Your custom colour override-->
    <link href="#" id="colour-scheme" rel="stylesheet">
    
    <!-- Your custom override -->
    <link href="/i/assets/css/custom-style.css" rel="stylesheet">
    
    
    
    <!-- Optional: ICON SETS -->
    <!-- Iconset: Font Awesome 4.7.0 via CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Iconset: flag icons - http://lipis.github.io/flag-icon-css/ -->
    <link href="/i/assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <!-- Iconset: ionicons - http://ionicons.com/ -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <!-- Iconset: Linearicons - https://linearicons.com/free -->
    <link href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet">
    
    
    <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="shortcut icon" href="/i/assets/img/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/i/assets/assets/img/icons/114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/i/assets/assets/img/icons/72x72.png">
    <link rel="apple-touch-icon" href="/i/assets/img/icons/default.png">
    
    
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    
    <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
    <script src="/i/assets/js/retina.min.js"></script>
  </head>
  
  <!-- ======== @Region: body ======== -->
  <body class="page page-index navbar-layout-default">
    
    <!-- @plugin: page loading indicator, delete to remove loader -->
    <div class="page-loader" data-toggle="page-loader"></div>
    
    <a id="#top" href="#content" class="sr-only">Skip to content</a> 
    
    <!-- ======== @Region: #header ======== -->
    <div id="header">
      
      <!--Hidden Header Region-->
      <div class="header-hidden collapse">
        <div class="header-hidden-inner container">
          <div class="row">
            <div class="col-sm-6">
              <h3>
                About Us
              </h3>
              <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
              <a href="about.html" class="btn btn-sm btn-primary">Find out more</a> 
            </div>
            <div class="col-sm-6">
              <!--@todo: replace with company contact details-->
              <h3>
                Contact Us
              </h3>
              <address>
                <p>
                  <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                  019223 8092344
                </p>
                <p>
                  <abbr title="Email"><i class="fa fa-envelope"></i></abbr>
                  info@themelize.me
                </p>
                <p>
                  <abbr title="Address"><i class="fa fa-home"></i></abbr>
                  Sunshine House, Sunville. SUN12 8LU.
                </p>
              </address>
            </div>
          </div>
        </div>
      </div>
      
      <!--Header upper region-->
      <div class="header-upper">
        <!--Show/hide trigger for #hidden-header -->
        <div id="header-hidden-link">
          <a href="#" title="Click me you'll get a surprise" class="show-hide" data-toggle="show-hide" data-target=".header-hidden"><i></i>Open</a>
        </div>
        <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
        <div class="header-inner container">
          <!--user menu-->
          <div class="header-block-flex order-1 mr-auto">
            <nav class="nav nav-sm header-block-flex">
              <a class="nav-link d-md-none" href="login.html"><i class="fa fa-user"></i></a>
              <a class="nav-link text-xs text-uppercase d-none d-md-block" href="#signup-modal" data-toggle="modal">Sign Up</a> <a class="nav-link text-xs text-uppercase d-none d-md-block" href="#login-modal" data-toggle="modal">Login</a> 
            </nav>
            <div class="header-divider header-divider-sm"></div>
            <!--language menu-->
            <div class="dropdown dropdowns-no-carets">
              <a href="#en" class="nav-link text-xs p-1 dropdown-toggle" data-toggle="dropdown"><i class="flag-icon flag-icon-gb"></i></a>
              <div class="dropdown-menu dropdown-menu-mini dropdown-menu-primary">
                <a href="#es" class="dropdown-item lang-es"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                <a href="#pt" class="dropdown-item lang-pt"><i class="flag-icon flag-icon-pt"></i> Portguese</a>
                <a href="#cn" class="dropdown-item lang-cn"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                <a href="#se" class="dropdown-item lang-se"><i class="flag-icon flag-icon-se"></i> Swedish</a>
              </div>
            </div>
          </div>
          <!--social media icons-->
          <div class="nav nav-icons header-block order-12">
            <!--@todo: replace with company social media details-->
            <a href="#" class="nav-link"> <i class="fa fa-twitter-square icon-1x"></i> <span class="sr-only">Twitter</span> </a>
            <a href="#" class="nav-link"> <i class="fa fa-facebook-square icon-1x"></i> <span class="sr-only">Facebook</span> </a>
            <a href="#" class="nav-link"> <i class="fa fa-linkedin-square icon-1x"></i> <span class="sr-only">Linkedin</span> </a>
            <a href="#" class="nav-link"> <i class="fa fa-google-plus-square icon-1x"></i> <span class="sr-only">Google plus</span> </a>
          </div>
        </div>
      </div>
      <div data-toggle="sticky">
        
        <!--Header search region - hidden by default -->
        <div class="header-search collapse" id="search">
          <form class="search-form container">
            <input type="text" name="search" class="form-control search" value="" placeholder="Search">
            <button type="button" class="btn btn-link"><span class="sr-only">Search </span><i class="fa fa-search fa-flip-horizontal search-icon"></i></button>
            <button type="button" class="btn btn-link close-btn" data-toggle="search-form-close"><span class="sr-only">Close </span><i class="fa fa-times search-icon"></i></button>
          </form>
        </div>
        
        <!--Header & Branding region-->
        <div class="header">
          <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
          <div class="header-inner container">
            <!--branding/logo -->
            <div class="header-brand">
              <a class="header-brand-text" href="index.html" title="Home">
                <h1 class="h2">
                  <span class="header-brand-text-alt">App</span>Strap<span class="header-brand-text-alt">.</span>
                </h1>
              </a>
              <div class="header-divider d-none d-lg-block"></div>
              <div class="header-slogan d-none d-lg-block">Bootstrap 4 Theme</div>
            </div>
            <!-- other header content -->
            <div class="header-block order-12">
              
              <!--Search trigger -->
              <a href="#search" class="btn btn-icon btn-link header-btn float-right order-11" data-toggle="search-form" data-target=".header-search"><i class="fa fa-search fa-flip-horizontal search-icon"></i></a>
              
              <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu - data-toggle="overlay" = Overlay Menu -->
              <a href="#top" class="btn btn-link btn-icon header-btn float-right d-lg-none" data-toggle="jpanel-menu" data-target=".navbar-main" data-direction="right"> <i class="fa fa-bars"></i> </a>
            </div>
            
            <div class="navbar navbar-expand-md navbar-static-top">
              <!--everything within this div is collapsed on mobile-->
              <div class="navbar-main collapse">
                <!--main navigation-->
                <ul class="nav navbar-nav float-lg-right dropdown-effect-fade">
                  
                  <!-- Homepages -->
                  <li class="nav-item dropdown dropdown-mega-menu active">
                    <a href="#" class="nav-link dropdown-toggle" id="indexs-drop" data-toggle="dropdown" data-hover="dropdown"> <i class="fa fa-home nav-link-icon"></i> <span class="d-none">Home</span> </a>
                    <!-- Dropdown Menu - mega menu-->
                    <div class="dropdown-menu">
                      <div class="row">
                        <div class="col-lg-6">
                          <h4 class="dropdown-header d-none d-lg-block mt-0">
                            Default Homepages
                          </h4>
                          <div class="row">
                            <div class="col-lg-6"> <a href="intro.html" class="dropdown-item">Intro</a> <a href="index.html" class="dropdown-item active">Homepage (default)</a> <a href="index-static.html" class="dropdown-item">Homepage No Slider</a> <a href="index-boxed.html" class="dropdown-item">Homepage Boxed</a> <a href="index-promo-header.html" class="dropdown-item">Promo Header</a> <a href="index-coming-soon.html" class="dropdown-item">Coming Soon</a> </div>
                            <div class="col-lg-6"> <a href="index-coming-soon-newsletter.html" class="dropdown-item">Coming Soon with newsletter</a> <a href="index-onepager.html" class="dropdown-item">One Pager Slideshow</a> <a href="index-onepager-image.html" class="dropdown-item">One Pager Image</a> <a href="index-onepager-image-full-height.html" class="dropdown-item">One Pager Image Full Height</a> <a href="index-onepager-bg-slideshow.html" class="dropdown-item">One Pager Background Slideshow</a> </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <h4 class="dropdown-header d-none d-lg-block mt-0">
                            Industry/Niche Homepages
                          </h4>
                          <div class="row">
                            <div class="col-lg-6"> <a href="demo-travel-blog.html" class="dropdown-item">Travel Blog</a> <a href="index-app-landing.html" class="dropdown-item">App Landing Page</a> <a href="index-music.html" class="dropdown-item">Music Homepage</a> <a href="index-magazine.html" class="dropdown-item">Magazine Homepage</a> <a href="index-event.html" class="dropdown-item">Event Homepage</a> <a href="index-gym.html" class="dropdown-item">Gym Homepage</a> </div>
                            <div class="col-lg-6"> <a href="index-jobs.html" class="dropdown-item">Jobs Homepage</a> <a href="index-corporate.html" class="dropdown-item">Corporate Homepage</a> <a href="index-restaurant.html" class="dropdown-item">Restaurant Homepage</a> <a href="index-photographer.html" class="dropdown-item">Photographer Homepage</a> <a href="index-freelancer-portfolio.html" class="dropdown-item">Freelancer Homepage</a> <a href="shop.html" class="dropdown-item">Shop Homepage</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <!-- Pages -->
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="pages-drop" data-toggle="dropdown" data-hover="dropdown">Pages</a> 
                    <!-- Menu -->
                    <div class="dropdown-menu">
                      <div class="dropdown dropdown-submenu">
                        <a href="about.html" class="dropdown-item dropdown-toggle" id="about-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">About</a> 
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu" role="menu" aria-labelledby="about-drop"> <a href="about.html" class="dropdown-item">About Us Basic</a> <a href="about-extended.html" class="dropdown-item">About Us Extended</a> <a href="about-me.html" class="dropdown-item">About Me</a> <a href="team.html" class="dropdown-item">Team List</a> <a href="team-grid.html" class="dropdown-item">Team Grid</a> <a href="team-member.html" class="dropdown-item">Team Member</a> <a href="contact.html" class="dropdown-item">Contact</a> <a href="contact.php" class="dropdown-item">Contact (PHP)</a> </div>
                      </div>
                      <div class="dropdown dropdown-submenu">
                        <a href="blog.html" class="dropdown-item dropdown-toggle" id="blog-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Blog</a> 
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu"> <a href="blog.html" class="dropdown-item">Blog List Right Sidebar</a> <a href="blog-leftbar.html" class="dropdown-item">Blog List Left Sidebar</a> <a href="blog-timeline.html" class="dropdown-item">Blog List Timeline</a> <a href="blog-grid.html" class="dropdown-item">Blog List Grid</a> <a href="blog-post.html" class="dropdown-item">Blog Post</a> <a href="blog-post-video.html" class="dropdown-item">Blog Post With Video</a> <a href="blog-post-slideshow.html" class="dropdown-item">Blog Post With Slideshow</a> <a href="blog-post-audio.html" class="dropdown-item">Blog Post With Audio Clip</a> </div>
                      </div>
                      <div class="dropdown dropdown-submenu">
                        <a href="pricing.html" class="dropdown-item dropdown-toggle" id="pricing-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Pricing</a> 
                        <!-- pricing pages -->
                        <div class="dropdown-menu"> <a href="pricing.html" class="dropdown-item">Pricing Plans</a> <a href="pricing-tables.html" class="dropdown-item">Comparison Tables</a> </div>
                      </div>
                      <div class="dropdown dropdown-submenu">
                        <a href="timeline.html" class="dropdown-item dropdown-toggle" id="timeline-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Timeline</a> 
                        <!-- timelines -->
                        <div class="dropdown-menu" role="menu" aria-labelledby="timeline-drop"> <a href="timeline.html" class="dropdown-item">Timeline Default</a> <a href="timeline-left.html" class="dropdown-item">Timeline Left</a> <a href="timeline-right.html" class="dropdown-item">Timeline Right</a> <a href="timeline-stacked.html" class="dropdown-item">Timeline Stacked</a> </div>
                      </div>
                      <a href="customers.html" class="dropdown-item">Customers</a> <a href="features.html" class="dropdown-item">Features/Services</a> <a href="login.html" class="dropdown-item">Login</a> <a href="signup.html" class="dropdown-item">Sign Up</a> <a href="starter.html" class="dropdown-item">Starter Snippets</a> <a href="404.html" class="dropdown-item">404 Error</a> 
                    </div>
                  </li>
                  
                  <!-- Features -->
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="more-drop" data-toggle="dropdown" data-hover="dropdown">Features</a> 
                    <!-- Dropdown Menu -->
                    <div class="dropdown-menu">
                      <div class="dropdown dropdown-submenu dropdown-menu-left">
                        <a href="headers.html" class="dropdown-item dropdown-toggle" id="headers-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Header Variations (19)</a> 
                        <!-- Header variations -->
                        <div class="dropdown-menu" role="menu" aria-labelledby="headers-drop"> <a href="header-elements.html" class="dropdown-item">Header Elements</a> <a href="header-offcanvas.html" class="dropdown-item">Header Off Canvas</a> <a href="header-collapse-menu.html" class="dropdown-item">Header Collapse Menu</a> <a href="header-overlay-menu-responsive.html" class="dropdown-item">Header Responsive Overlay Menu</a> <a href="header-overlay-menu.html" class="dropdown-item">Header Overlay Menu</a> <a href="header-collapse-menu-responsive.html" class="dropdown-item">Header Responsive Collapse Menu</a> <a href="header-fullwidth.html" class="dropdown-item">Header Full Width</a> <a href="header-navbar-below.html" class="dropdown-item">Header Navbar Below</a> <a href="header-compact.html" class="dropdown-item">Header Compact</a> <a href="header-dark.html" class="dropdown-item">Header Dark</a> <a href="header-primary.html" class="dropdown-item">Header Primary</a> <a href="header-transparent.html" class="dropdown-item">Header Transparent</a> <a href="header-transparent-dark.html" class="dropdown-item">Header Transparent Dark</a> <a href="header-transparent-primary.html" class="dropdown-item">Header Transparent Primary</a> <a href="header-translucent.html" class="dropdown-item">Header Translucent</a> <a href="header-translucent-dark.html" class="dropdown-item">Header Translucent Dark</a> <a href="header-translucent-primary.html" class="dropdown-item">Header Translucent Primary</a> <a href="header-nav-left.html" class="dropdown-item">Header Nav Left</a> <a href="header-nav-fullheight.html" class="dropdown-item">Header Nav Full Height</a> <a href="header-bottom.html" class="dropdown-item">Header Bottom</a> </div>
                      </div>
                      <div class="dropdown dropdown-submenu dropdown-menu-left">
                        <a href="headers.html" class="dropdown-item dropdown-toggle" id="footers-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Footer Variations (5)</a> 
                        <!-- Header variations -->
                        <div class="dropdown-menu" role="menu" aria-labelledby="footers-drop"> <a href="footer-light.html" class="dropdown-item">Footer Light</a> <a href="footer-compact.html" class="dropdown-item">Footer Compact</a> <a href="footer-menus.html" class="dropdown-item">Footer Menus</a> <a href="footer-compact-light.html" class="dropdown-item">Footer Compact Light</a> <a href="footer-menus-light.html" class="dropdown-item">Footer Menus Light</a> </div>
                      </div>
                      <div class="dropdown dropdown-submenu dropdown-menu-left">
                        <a href="sliders.html" class="dropdown-item dropdown-toggle" id="slider-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Sliders</a> 
                        <!-- Sliders -->
                        <div class="dropdown-menu">
                          <!--Slider Revolution -->
                          <h4 class="dropdown-header">
                            Slider Revolution
                          </h4>
                          <a href="slider-revolution-default.html" class="dropdown-item">Default</a> <a href="slider-revolution-full.html" class="dropdown-item">Full Width</a> <a href="slider-revolution-behind.html" class="dropdown-item">Behind Navbar</a> <a href="slider-revolution-boxed.html" class="dropdown-item">Boxed</a> 
                          <!--Backstretch Slider-->
                          <h4 class="dropdown-header">
                            Backstretch
                          </h4>
                          <a href="backstretch.html" class="dropdown-item">Background Slideshow</a> <a href="backstretch-boxed.html" class="dropdown-item">Boxed Background Slideshow</a> 
                          <!--Flexslider-->
                          <h4 class="dropdown-header">
                            Flexslider
                          </h4>
                          <a href="flexslider-default.html" class="dropdown-item">Default</a> <a href="flexslider-full.html" class="dropdown-item">Full Width</a> <a href="flexslider-behind.html" class="dropdown-item">Behind Navbar</a> <a href="flexslider-boxed.html" class="dropdown-item">Boxed</a> 
                        </div>
                      </div>
                      <a href="grid.html" class="dropdown-item">Grid System</a> <a href="flexbox.html" class="dropdown-item">Flexbox!</a> <a href="colours.html" class="dropdown-item">Theme Colours</a> 
                    </div>
                  </li>
                  
                  <!-- Shop megamenu -->
                  <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-75">
                    <a href="#" class="nav-link dropdown-toggle" id="shop-drop" data-toggle="dropdown" data-hover="dropdown">Shop</a> 
                    <!-- Dropdown Menu - mega menu-->
                    <div class="dropdown-menu dropdown-menu-right">
                      <div class="row">
                        <div class="col-lg-6">
                          <h3 class="dropdown-header mt-0 pt-0">
                            Pages
                          </h3>
                          <a href="shop.html" class="dropdown-item">Shop Homepage</a> <a href="shop-cart.html" class="dropdown-item">Cart</a> <a href="shop-checkout.html" class="dropdown-item">Checkout</a> <a href="shop-confirmation.html" class="dropdown-item">Confirmation</a> <a href="shop-grid.html" class="dropdown-item">Products Grid</a> <a href="shop-list.html" class="dropdown-item">Products List</a> <a href="shop-product.html" class="dropdown-item">Product View</a> 
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                          <h3 class="dropdown-header mt-0 pt-0">
                            Widget <span class="badge badge-primary text-uppercase">Hot</span>
                          </h3>
                          <div class="dropdown-widget">
                            <!-- Shop product carousel Uses Owl Carousel plugin All options here are customisable from the data-owl-carousel-settings="{OBJECT}" item via data- attributes: http://www.owlgraphic.com/owlcarousel/#customizing ie. data-settings="{"items": "4", "lazyLoad":"true", "navigation":"true"}" -->
                            <div class="products-carousel owl-nav-over" data-toggle="owl-carousel" data-owl-carousel-settings='{"items": 1,"responsive":{"0":{"items":1,"nav":true, "dots":false}}}'>
                              <a href="#">
                                <img src="/i/assets/img/shop/jacket-1.jpg" alt="Item 1 image" class="lazyOwl img-fluid" />
                              </a>
                              <a href="#">
                                <img src="/i/assets/img/shop/jacket-2.jpg" alt="Item 2 image" class="lazyOwl img-fluid" />
                              </a>
                              <a href="#">
                                <img src="/i/assets/img/shop/jacket-3.jpg" alt="Item 3 image" class="lazyOwl img-fluid" />
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <!-- Elements/shortcodes -->
                  <li class="nav-item dropdown dropdown-mega-menu">
                    <a href="#" class="nav-link dropdown-toggle" id="elements-drop" data-toggle="dropdown" data-hover="dropdown">Elements</a> 
                    <!-- Dropdown Menu - mega menu-->
                    <div class="dropdown-menu">
                      <h4 class="dropdown-header d-none d-lg-block mt-0">
                        35 pages of elements/snippets <i class="new-tag">Updated!</i>
                      </h4>
                      <div class="row">
                        <div class="col-lg-3"> <a href="elements-alerts.html" class="dropdown-item">Alerts</a> <a href="elements-animation.html" class="dropdown-item">Animations</a> <a href="elements-badges.html" class="dropdown-item">Badges</a> <a href="elements-button-groups.html" class="dropdown-item">Button Groups</a> <a href="elements-buttons.html" class="dropdown-item">Buttons</a> <a href="elements-cards.html" class="dropdown-item">Cards</a> <a href="elements-carousels.html" class="dropdown-item">Carousels</a> <a href="elements-collapse.html" class="dropdown-item">Collapse / Accordions</a> <a href="elements-colour-utils.html" class="dropdown-item">Colours Utils</a> </div>
                        <div class="col-lg-3"> <a href="elements-counters.html" class="dropdown-item">Counters</a> <a href="elements-ctas.html" class="dropdown-item">Call To Action Blocks</a> <a href="elements-dividers.html" class="dropdown-item">Dividers</a> <a href="elements-dropdowns.html" class="dropdown-item">Dropdowns</a> <a href="elements-forms.html" class="dropdown-item">Forms</a> <a href="elements-forms-input-groups.html" class="dropdown-item">Forms Input Groups</a> <a href="elements-icons.html" class="dropdown-item">Icons</a> <a href="elements-icons-flags.html" class="dropdown-item">Icons: Flags</a> <a href="elements-icons-fontawesome.html" class="dropdown-item">Icons: Font Awesome</a> </div>
                        <div class="col-lg-3"> <a href="elements-icons-ionicons.html" class="dropdown-item">Icons: Ionicons</a> <a href="elements-icons-linearicons.html" class="dropdown-item">Icons: Linearicons</a> <a href="elements-list-groups.html" class="dropdown-item">List Groups</a> <a href="elements-modals.html" class="dropdown-item">Modals</a> <a href="elements-modals-onload.html" class="dropdown-item">Modals Onload</a> <a href="elements-navs.html" class="dropdown-item">Navs</a> <a href="elements-navs-tabbable.html" class="dropdown-item">Tabbable Navs</a> <a href="elements-overlays.html" class="dropdown-item">Overlays</a> <a href="elements-progressbars.html" class="dropdown-item">Progress Bars</a> </div>
                        <div class="col-lg-3"> <a href="elements-social-media.html" class="dropdown-item">Social Media Branding</a> <a href="elements-spacers.html" class="dropdown-item">Spacers</a> <a href="elements-tables.html" class="dropdown-item">Tables</a> <a href="elements-tooltips-popovers.html" class="dropdown-item">Tooltips & Popovers</a> <a href="elements-type-effect.html" class="dropdown-item">Type Effect</a> <a href="elements-typography.html" class="dropdown-item">Typography</a> <a href="elements-utils.html" class="dropdown-item">Utilities</a> <a href="elements-video-blocks.html" class="dropdown-item">Video Blocks</a> </div>
                      </div>
                    </div>
                  </li>
                  
                  <!-- Mega menu example -->
                  <li class="nav-item dropdown dropdown-persist dropdown-mega-menu dropdown-mega-menu-50">
                    <a href="#" class="nav-link dropdown-toggle" id="megamenu-drop" data-toggle="dropdown" data-hover="dropdown">Mega Menu</a> 
                    <!-- Dropdown Menu - Mega Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                      <!-- Nav tabs -->
                      <ul class="nav nav-pills nav-pills-border-bottom-inside flex-column flex-lg-row" role="tablist">
                        <li class="nav-item"> <a class="nav-link p-3 active text-center font-weight-bold" data-toggle="tab" data-target=".menu-tab-1" role="tab">Mega Menu Tab 1</a> </li>
                        <li class="nav-item"> <a class="nav-link p-3 text-center font-weight-bold" data-toggle="tab" data-target=".menu-tab-2" role="tab">Mega Menu Tab 2</a> </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content py-3">
                        <div class="tab-pane active show menu-tab-1" role="tabpanel">
                          <div class="row text-center">
                            <div class="col-lg-4 py-2">
                              <i class="fa fa-tachometer icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.1"></i> 
                              <h5 class="mt-2">
                                Fully Optimized
                              </h5>
                              <p>Fere haero pneum populus vero vulputate.</p>
                            </div>
                            <div class="col-lg-4 py-2">
                              <i class="fa fa-wrench icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.2"></i> 
                              <h5 class="mt-2">
                                Free Support
                              </h5>
                              <p>Abdo eu hos ulciscor.</p>
                            </div>
                            <div class="col-lg-4 py-2">
                              <i class="fa fa-rocket icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.3"></i> 
                              <h5 class="mt-2">
                                Free Upgrades
                              </h5>
                              <p>Immitto inhibeo magna nimis nutus sit tego.</p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane menu-tab-2" role="tabpanel">
                          <div class="row text-center">
                            <div class="col-lg-4 py-2">
                              <i class="fa fa-line-chart icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.4"></i> 
                              <h5 class="mt-2">
                                99.9% Uptime
                              </h5>
                              <p>Augue duis exputo hos incassum jumentum lucidus melior sed virtus.</p>
                            </div>
                            <div class="col-lg-4 py-2">
                              <i class="fa fa-smile-o icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.5"></i> 
                              <h5 class="mt-2">
                                Multiuser
                              </h5>
                              <p>Dolor gravis importunus jus pagus praesent verto.</p>
                            </div>
                            <div class="col-lg-4 py-2">
                              <i class="fa fa-plug icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.6"></i> 
                              <h5 class="mt-2">
                                Plug n play
                              </h5>
                              <p>Huic natu populus. Comis consectetuer distineo gravis jugis jumentum oppeto premo quidne.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!--/.navbar-collapse -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ======== @Region: #highlighted ======== -->
    <div id="highlighted">
      <!-- Showshow - Slider Revolution see: plugins/slider-revolution/examples&sources for help invoke using data-toggle="slider-rev" options can be passed to the slider via HTML5 data- ie. data-startwidth="960" -->
      <div class="slider-wrapper rev_slider_wrapper fullscreen-container bg-black" data-page-class="slider-appstrap-theme">
        <div class="rev_slider fullscreenbanner" data-toggle="slider-rev" data-settings='{"startwidth":1100, "startheight":520, "delay":10000}'>
          <ul>
            <!-- SLIDE 1 -->
            <li class="slide overlay overlay-op-4 overlay-gradient" data-transition="fadethroughdark" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="/i/assets/img/slides/app_bg.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-link="shop-list.html">
              <img src="/i/assets/img/slide-dummy.png" data-lazyload="/i/assets/img/slides/app_bg.jpg" alt="background image" data-bgposition="center top" data-bgfit="cover" data-bgparallax="off" class="rev-slidebg" data-no-retina />
              <!-- SLIDE 1 Content-->
              <div class="slide-content container" style="z-index: 10;">
                <!--elements within .slide-content are pushed below navbar on "behind"-->
                <!-- Layer 1 -->
                <div class="tp-caption text-grey" data-x="['left','left','left','left']" data-hoffset="['0','0','0','40']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['120','120','120','120']" data-fontsize="['52','52','52','52']" data-lineheight="['52','52','52','52']" data-width="420" data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1200,"to":"o:1;","delay":1300,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="left"> <span class="font-weight-bold text-uppercase text-white">Welcome to AppStrap</span>
</div>
                <!-- Layer 3 -->
                <div class="tp-caption text-grey" data-x="['left','left','left','left']" data-hoffset="['0','0','0','40']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','60','60','60']" data-fontsize="['20','20','20','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":0,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","delay":1400},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']"> A real crowd-pleaser of a Bootstrap 4 Theme
</div>
                <!-- Layer 3 -->
                <div class="tp-caption rs-parallaxlevel-8" data-frames='[{"from":"o:0;sX:3;sY:3;","speed":2000,"to":"o:0.20;sX:3;sY:3;","delay":1800,"ease":"default"},{"delay":"wait","speed":1200,"to":"x:[100%];","ease":"Power3.easeInOut"}]' data-x="left" data-y="bottom" data-hoffset="-200" data-voffset="0" data-width="none" data-height="none" data-type="image" data-basealign="slide"> <i class="fa fa-bullseye icon-20x icon-bg op-1 text-white"></i>
</div>
                <!-- Layer 4 -->
                <div class="tp-caption tp-resizeme bg-primary-bright" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-x="['left','left','left','left']" data-hoffset="['0','0','0','40']" data-y="bottom" data-voffset="100" data-width="380" data-height="4" data-basealign="slide"></div>
              </div>
            </li>
            <!-- SLIDE 2 -->
            <li class="slide" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-rotate="0" data-saveperformance="off" data-title="Slide">
              <img src="/i/assets/img/slides/transparent.png" class="rev-slidebg bg-white" alt="Background image" data-bgcolor="#ffffff" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina />
              <!-- LAYERS -->
              <!-- Layer 1 -->
              <div class="tp-caption tp-resizeme rs-parallaxlevel-8" data-x="['left','left','left','left']" data-hoffset="['-364','-364','-420','-416']" data-y="['top','top','top','top']" data-voffset="['-185','-185','-185','-185']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="off" data-frames='[{"from":"x:left;rZ:-90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;border-width:0px;">
                <img src="/i/assets/img/slides/header_penpot.png" alt="" data-ww="['650px','650px','650px','650px']" data-hh="['500px','500px','500px','500px']" width="650" height="500" data-no-retina />
              </div>
              <!-- Layer 2 -->
              <div class="tp-caption tp-resizeme rs-parallaxlevel-9" data-x="['right','right','right','right']" data-hoffset="['-100','-100','-120','-144']" data-y="['top','top','top','top']" data-voffset="['-254','-254','-254','-254']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;y:-500px;rZ:90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;border-width:0px;">
                <img src="/i/assets/img/slides/header_flowerpot.png" alt="" data-ww="['700px','700px','700px','700px']" data-hh="['600px','600px','600px','600px']" width="700" height="600" data-no-retina />
              </div>
              <!-- Layer 3 -->
              <div class="tp-caption tp-resizeme rs-parallaxlevel-10" data-x="['left','left','left','left']" data-hoffset="['-472','-372','-340','-638']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-484','-484','-520','-522']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="off" data-frames='[{"from":"x:left;rZ:45deg;","speed":2500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;border-width:0px;">
                <img src="/i/assets/img/slides/header_papers.png" alt="" data-ww="['900px','900px','900px','900px']" data-hh="['1000px','1000px','1000px','1000px']" width="900" height="1000" data-no-retina />
              </div>
              <!-- Layer 4 -->
              <div class="tp-caption tp-resizeme rs-parallaxlevel-12" data-x="['left','left','left','left']" data-hoffset="['134','134','-2','-57']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['67','67','50','6']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rZ:90deg;","speed":1500,"to":"o:1;","delay":1050,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-width:0px;">
                <img src="/i/assets/img/slides/header_marker.png" alt="" data-ww="['200px','200px','200px','200px']" data-hh="['300px','300px','300px','300px']" width="200" height="300" data-no-retina />
              </div>
              <!-- Layer 5 -->
              <div class="tp-caption tp-resizeme rs-parallaxlevel-11" data-x="['left','left','left','left']" data-hoffset="['181','181','30','-39']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-170','-170','-190','-212']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rZ:-90deg;","speed":1500,"to":"o:1;","delay":1250,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;border-width:0px;">
                <img src="/i/assets/img/slides/header_edding.png" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['400px','400px','400px','400px']" width="300" height="400" data-no-retina />
              </div>
              <!-- Layer 6 -->
              <div class="tp-caption tp-resizeme rs-parallaxlevel-9" data-x="['right','right','right','right']" data-hoffset="['-364','-364','-479','-553']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-155','-155','-180','-202']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;rZ:-65deg;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;border-width:0px;">
                <img src="/i/assets/img/slides/header_tablet.png" alt="" data-ww="['730px','730px','730px','730px']" data-hh="['520px','520px','520px','520px']" width="730" height="520" data-no-retina />
              </div>
              <!-- Layer 7 -->
              <div class="tp-caption tp-resizeme rs-parallaxlevel-11" data-x="['right','right','right','right']" data-hoffset="['222','222','105','8']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['8','8','-17','-10']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;rZ:90deg;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;border-width:0px;">
                <img src="/i/assets/img/slides/header_pen.png" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['500px','500px','500px','500px']" width="300" height="500" data-no-retina />
              </div>
              <div class="slide-content">
                <!-- Layer 8 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['60','60','60','60']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":510,"ease":"Power4.easeOut"},{"delay":640,"speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Flexbox Support.</div>
                <!-- Layer 9 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['60','60','60','60']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":2940,"ease":"Power4.easeOut"},{"delay":660,"speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Bootstrap 4 Based.</div>
                <!-- Layer 10 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['60','60','60','60']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":5390,"ease":"Power4.easeOut"},{"delay":"690","speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Fully Responsive.</div>
                <!-- Layer 11 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['60','60','60','60']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":7890,"ease":"Power4.easeOut"},{"delay":"wait","speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">AppStrap.</div>
                <!-- Layer 12 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['-8','-8','-8','-8']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']" data-fontsize="['20','20','20','25']" data-lineheight="['20','20','20','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;rX:45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">The ultimate Bootstrap 4 Theme!</div>
                <!-- Layer 13 -->
                <div class="tp-caption rs-parallaxlevel-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','92']" data-width="none" data-height="none" data-whitespace="nowrap" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:100px;rX:90deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'> <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-outline-primary btn-rounded btn-xlg d-none d-md-block">Get AppStrap</a> <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-outline-primary btn-rounded btn-sm d-md-none">Get AppStrap</a>
</div>
              </div>
            </li>
            <!-- SLIDE 3 -->
            <li class="slide overlay overlay-op-2" data-index="rs-3007" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="/i/assets/img/slides/office_cover-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Office">
              <!-- MAIN IMAGE -->
              <img src="/i/assets/img/slides/office_cover.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina />
              <!-- LAYERS -->
              <!-- BACKGROUND VIDEO LAYER -->
              <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="/i/assets/img/slides/Working-Space.mp4" data-videopreload="auto" data-videoloop="loopandnoslidestop" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false"></div>
              <!-- Layer 1 -->
              <div class="tp-caption text-white" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-20']" data-fontsize="['70','70','70','70']"
data-lineheight="['70','70','70','60']"
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-type="text"
data-basealign="slide"
data-responsive_offset="off" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
data-textAlign="['left','left','left','left']"
data-paddingtop="[10,10,10,10]"
data-paddingright="[0,0,0,0]"
data-paddingbottom="[10,10,10,10]"
data-paddingleft="[0,0,0,0]">Pack with features!</div>
              <!-- Layer 2 -->
              <div class="tp-caption text-grey" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['22','22','22','0']"
data-fontsize="['20','20','20','20']"
data-lineheight="['20','20','20','20']"
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-type="text"
data-basealign="slide"
data-responsive_offset="off" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
data-textAlign="['left','left','left','left']">Kickstart your next web project with AppStrap!</div>
              <!-- Layer 3 -->
              <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['122','122','60','30']" data-width="none"
data-height="none"
data-whitespace="nowrap"
data-basealign="slide"
data-responsive_offset="off" data-responsive="on"
data-frames='[{"from":"y:100px;rX:90deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'>
<a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-primary btn-rounded btn-xlg d-none d-md-block">Get AppStrap</a>
<a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-primary btn-rounded btn-sm d-md-none">Get AppStrap</a> </div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!--end of tp-banner-->
      </div>
    </div>
    
    <!-- ======== @Region: #content ======== -->
    <div id="content" class="p-0">
      <!-- Features -->
      <div id="features" class="container py-4 py-lg-6">
        <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
        <h2 class="text-center text-uppercase font-weight-bold my-0">
          Core Features
        </h2>
        <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
          Great features, great product!
        </h5>
        <hr class="mb-5 w-50 mx-auto" />
        <div class="row text-center">
          <div class="col-lg-4 py-2">
            <i class="fa fa-tachometer icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.1"></i> 
            <h4 class="mt-2">
              Fully Optimized
            </h4>
            <p>Amet at elit erat lucidus occuro os pala utrum.</p>
          </div>
          <div class="col-lg-4 py-2">
            <i class="fa fa-wrench icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.2"></i> 
            <h4 class="mt-2">
              Free Support
            </h4>
            <p>Causa cogo dolus esse neo patria quis vel.</p>
          </div>
          <div class="col-lg-4 py-2">
            <i class="fa fa-rocket icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.3"></i> 
            <h4 class="mt-2">
              Free Upgrades
            </h4>
            <p>Modo odio refoveo. Decet gemino iaceo nimis olim refero turpis.</p>
          </div>
          <div class="col-lg-4 py-2">
            <i class="fa fa-line-chart icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.4"></i> 
            <h4 class="mt-2">
              99.9% Uptime
            </h4>
            <p>Adipiscing aliquam et nibh plaga turpis. Autem eligo loquor refoveo.</p>
          </div>
          <div class="col-lg-4 py-2">
            <i class="fa fa-smile-o icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.5"></i> 
            <h4 class="mt-2">
              Multiuser
            </h4>
            <p>Bene loquor neque pertineo plaga vereor. At esca humo jugis lobortis praesent quidne rusticus saluto.</p>
          </div>
          <div class="col-lg-4 py-2">
            <i class="fa fa-plug icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.6"></i> 
            <h4 class="mt-2">
              Plug n play
            </h4>
            <p>Aliquip melior populus qui refoveo saepius tego. Cogo mauris obruo pneum ulciscor verto vulputate.</p>
          </div>
        </div>
      </div>
      <!-- Why AppStrap -->
      <div class="bg-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 divider-diagonal divider-diagonal-r divider-dark" data-bg-img="/i/assets/img/backgrounds/computer-screens.jpg"></div>
            <div class="col-lg-4 py-5">
              <hr class="hr-lg mt-0 mb-2 w-10 ml-0 hr-primary" />
              <h2 class="display-4 text-slab text-white text-uppercase mt-0 mb-5">
                Choose <span class="text-primary font-weight-bold">AppStrap</span>
              </h2>
              <div class="row mb-3">
                <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
</div>
                <div class="col-10 col-md-11 text-grey">
                  <h4 class="font-weight-bold text-white text-uppercase">
                    Fully Optimized
                  </h4>
                  <p>Camur ex in jugis melior. Bene caecus neque nostrud vicis ymo. Abdo distineo esca esse illum macto magna nutus proprius roto.</p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
</div>
                <div class="col-10 col-md-11 text-grey">
                  <h4 class="font-weight-bold text-white text-uppercase">
                    Free Upgrades
                  </h4>
                  <p>Decet esca iaceo interdico vulputate. Damnum euismod eum metuo nulla odio patria utinam vel velit.</p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
</div>
                <div class="col-10 col-md-11 text-grey">
                  <h4 class="font-weight-bold text-white text-uppercase">
                    99.9% Uptime
                  </h4>
                  <p>Antehabeo causa damnum exputo fere scisco te voco. Damnum exputo ibidem ideo iustum jumentum magna utinam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Pricing Table-->
      <div id="pricing" class="bg-light py-3 py-lg-6">
        <div class="container">
          <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
          <h2 class="text-center text-uppercase font-weight-bold my-0">
            Pricing Plans
          </h2>
          <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
            Competitive pricing plans to suit your needs
          </h5>
          <hr class="mb-5 w-50 mx-auto" />
          <div class="row pricing-stack">
            <div class="col-md-3">
              <div class="card bg-shadow text-center rounded">
                <h3 class="card-title py-3 text-shadow">
                  Starter
                </h3>
                <p class="price-banner border-grey card-body-overlap"> <span class="text-fancy price-digits">Free!</span>
</p>
                <div class="card-body">
                  <ul class="list-unstyled list-border-dots">
                    <li>3 User Accounts</li>
                    <li>3 Private Projects</li>
                    <li>Umlimited Public Projects</li>
                    <li>5GB of space</li>
                  </ul>
                  <a href="#" class="btn btn-primary btn-block btn-rounded">Sign Up</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card bg-white bg-shadow text-center card-outline-primary">
                <h3 class="card-title py-3 text-shadow">
                  <span class="em">Pro</span> <span class="text-fancy">Plus</span>
                </h3>
                <p class="price-banner bg-primary text-white border-primary card-body-overlap">
                  <span class="price-currency">$</span> 
                  <span class="price-digits">49<span>.95</span></span>
                  <span class="price-extra">/MO</span>

                </p>
                <div class="card-body">
                  <ul class="list-unstyled list-border-dots">
                    <li>50 User Accounts</li>
                    <li>50 Private Projects</li>
                    <li>Umlimited Public Projects</li>
                    <li>Unlimited space</li>
                  </ul>
                  <a href="#" class="btn btn-primary btn-block btn-rounded mt-4">Sign Up</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card bg-white bg-shadow text-center card-outline-primary">
                <div class="card-ribbon card-ribbon-top card-ribbon-left bg-primary text-white">Popular</div>
                <h3 class="card-title py-3 text-shadow">
                  <span class="em">Biz</span> <span class="text-fancy">Plus</span>
                </h3>
                <p class="price-banner bg-primary text-white border-primary card-body-overlap">
                  <span class="price-currency">$</span> 
                  <span class="price-digits">199<span>.95</span></span>
                  <span class="price-term">/MO</span>

                </p>
                <div class="card-body">
                  <ul class="list-unstyled list-border-dots">
                    <li>Umlimited User Accounts</li>
                    <li>Umlimited Private Projects</li>
                    <li>Umlimited Public Projects</li>
                    <li>Unlimited space</li>
                  </ul>
                  <a href="#" class="btn btn-primary btn-block btn-rounded mt-4">Sign Up</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card bg-shadow text-center">
                <div class="card-ribbon card-ribbon-top card-ribbon-right bg-light text-muted">Best Buy</div>
                <h3 class="card-title py-3 text-shadow">
                  Starter <span class="text-fancy">Plus</span>
                </h3>
                <p class="price-banner border-grey card-body-overlap">
                  <span class="price-currency">$</span> 
                  <span class="price-digits">19<span>.95</span></span>
                  <span class="price-term">/MO</span>

                </p>
                <div class="card-body">
                  <ul class="list-unstyled list-border-dots">
                    <li>10 User Accounts</li>
                    <li>10 Private Projects</li>
                    <li>Umlimited Public Projects</li>
                    <li>15GB of space</li>
                  </ul>
                  <a href="#" class="btn btn-primary btn-block btn-rounded">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Plan features -->
          <div class="bg-grey bg-shadow py-3 mt-4 text-center">
            <h4 class="d-inline-block pr-1 my-0">
              <span>All Plans <span class="font-weight-normal text-muted">Include</span>:</span>
            </h4>
            <p class="d-inline-block text-muted my-0">90 day money back guarantee <span class="text-primary font-weight-bold">//</span> 24/7 telephone support <span class="text-primary font-weight-bold">//</span> FREE Setup <span class="text-primary font-weight-bold">//</span> Migration Help <span class="text-primary font-weight-bold">//</span> Developer API</p>
          </div>
        </div>
      </div>
      <!-- Steps -->
      <div class="container">
        <div class="py-3 py-lg-6">
          <ul class="nav nav-steps nav-steps-circles flex-column flex-lg-row justify-content-around w-80 mx-auto">
            <li class="nav-item">
              <a href="#tab-steps1" class="nav-link active" data-toggle="tab"> <i class="fa fa-camera-retro icon-2x mb-05"></i> <span class="font-weight-bold d-block">Step 1</span> </a>
            </li>
            <li class="nav-item">
              <a href="#tab-steps2" class="nav-link" data-toggle="tab"> <i class="fa fa-thumbs-up icon-2x mb-05"></i> <span class="font-weight-bold d-block">Step 2</span> </a>
            </li>
            <li class="nav-item">
              <a href="#tab-steps3" class="nav-link" data-toggle="tab"> <i class="fa fa-rocket icon-2x mb-05"></i> <span class="font-weight-bold d-block">Step 3</span> </a>
            </li>
            <li class="nav-item">
              <a href="#tab-steps4" class="nav-link" data-toggle="tab"> <i class="fa fa-flag icon-2x mb-05"></i> <span class="font-weight-bold d-block">Step 4</span> </a>
            </li>
          </ul>
          <div class="tab-content text-center pb-2 px-md-6">
            <div class="tab-pane fade active show" id="tab-steps1">
              <h3>
                Quick Start Step 1
              </h3>
              <p>Dignissim tincidunt mattis lorem, sagittis nisi, amet ut pulvinar lectus cursus ac! Enim turpis odio dis. Non ut vel, nisi dapibus? Velit augue tortor, ut ac ac nec tortor nec, mauris massa.</p>
              <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-lg btn-outline-primary">Get Started now</a> 
            </div>
            <div class="tab-pane fade" id="tab-steps2">
              <h3>
                Quick Start Step 2
              </h3>
              <p>Aliquet risus, penatibus, ac integer ultricies ultricies elementum augue proin habitasse placerat. Nunc habitasse duis, elementum, porttitor porta? Purus, ac odio. Habitasse, egestas vut.</p>
              <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-lg btn-outline-primary">Get Started now</a> 
            </div>
            <div class="tab-pane fade" id="tab-steps3">
              <h3>
                Quick Start Step 3
              </h3>
              <p>Turpis elit, egestas nec etiam! Porta parturient amet! Eros aenean sit lacus sagittis massa? Massa a nunc! Nisi vut! Lundium, dictumst, nunc enim, natoque, cras nec, dictumst et rhoncus!</p>
              <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-lg btn-outline-primary">Get Started now</a> 
            </div>
            <div class="tab-pane fade" id="tab-steps4">
              <h3>
                Quick Start Step 4
              </h3>
              <p>Dignissim enim in vel urna tortor nascetur rhoncus parturient ultricies, purus lundium velit nec arcu et dolor vel. </p>
              <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-lg btn-outline-primary">Get Started now</a> 
            </div>
          </div>
        </div>
      </div>
      <!-- Video background MDR -->
      <div class="p-3 p-lg-5 bg-light text-center" data-bg-video="/i/assets/videos/bubbles.mp4" data-animate="fadeIn">
        <div class="container">
          <h2 class="text-white display-4 text-shadow">
            Add some <span class="font-italic font-weight-bold">fizz</span> to your next website!
          </h2>
          <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-xlg btn-rounded btn-primary mt-4">Get AppStrap!</a>

        </div>
      </div>
      <!--Projects carousel -->
      <div id="projects" class="container p-3 py-lg-6" data-toggle="magnific-popup" data-magnific-popup-settings='{"delegate": "a.project", "gallery":{"enabled":true}}'>
        <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
        <h2 class="text-center text-uppercase font-weight-bold my-0">
          Latest Projects
        </h2>
        <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
          See what we've been working on!
        </h5>
        <hr class="mb-5 w-50 mx-auto" />
        <div class="mt-4 owl-nav-over owl-nav-over-lg owl-dots-center" data-toggle="owl-carousel" data-owl-carousel-settings='{"responsive":{"0":{"items":1, "nav":false, "dots":true}, "600":{"items":2, "dots":true}, "940":{"items":3, "nav":true, "dots":true}}, "margin":1, "nav":true, "dots":false}'>
          
          <!--Project item 1-->
          <a href="/i/assets/img/projects/project-1.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-1-sm.jpg" alt="Project 1" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Adipiscing Hos Imputo Quidem Tum</span> </span>
          </a>
          
          <!--Project item 2-->
          <a href="/i/assets/img/projects/project-2.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-2-sm.jpg" alt="Project 2" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Abico Aliquip Fere Ludus Premo</span> </span>
          </a>
          
          <!--Project item 3-->
          <a href="/i/assets/img/projects/project-3.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-3-sm.jpg" alt="Project 3" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Iusto Nisl Probo Roto Rusticus</span> </span>
          </a>
          
          <!--Project item 4-->
          <a href="/i/assets/img/projects/project-4.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-4-sm.jpg" alt="Project 4" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Cui Dolore Haero Velit Wisi</span> </span>
          </a>
          
          <!--Project item 5-->
          <a href="/i/assets/img/projects/project-5.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-5-sm.jpg" alt="Project 5" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Commodo Jumentum Praemitto Ut Voco</span> </span>
          </a>
          
          <!--Project item 6-->
          <a href="/i/assets/img/projects/project-6.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-6-sm.jpg" alt="Project 6" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Facilisi Neque Saluto Ulciscor Ullamcorper</span> </span>
          </a>
          
          <!--Project item 7-->
          <a href="/i/assets/img/projects/project-7.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-7-sm.jpg" alt="Project 7" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Haero Loquor Mos Praemitto Saluto</span> </span>
          </a>
          
          <!--Project item 8-->
          <a href="/i/assets/img/projects/project-8.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-8-sm.jpg" alt="Project 8" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Hendrerit Inhibeo Iusto Quidne Sudo</span> </span>
          </a>
          
          <!--Project item 9-->
          <a href="/i/assets/img/projects/project-9.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-9-sm.jpg" alt="Project 9" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Augue Gemino Haero Oppeto Quidem</span> </span>
          </a>
          
          <!--Project item 10-->
          <a href="/i/assets/img/projects/project-10.jpg" class="project overlay-hover">
            <img src="/i/assets/img/projects/project-10-sm.jpg" alt="Project 10" class="img-fluid" />
            <span class="overlay-hover-content"> <i class="fa fa-arrow-circle-right icon-3x text-white"></i> <span class="h5 mt-4">Accumsan Decet Interdico Sudo Zelus</span> </span>
          </a>
        </div>
      </div>
      <!--Customer testimonial-->
      <div id="testimonials" class="p-3 py-lg-6 bg-dark">
        <div class="container">
          <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
          <h2 class="text-white text-center text-uppercase font-weight-bold my-0">
            Highly Recommended
          </h2>
          <h5 class="text-center font-weight-light mt-2 mb-0 text-grey">
            99% of our customers recommend us!
          </h5>
          <hr class="mb-5 w-50 mx-auto" />
          <div class="row">
            <div class="col-md-4 d-md-flex">
              <blockquote class="blockquote-bubble text-center" data-animate="fadeIn" data-animate-delay="0.1">
                <p class="blockquote-bubble-content bg-white">"It's totally awesome, we're could imagine life without it!"</p>
                <small class="text-grey">
                  <img src="/i/assets/img/team/jimi.jpg" alt="Jimi Bloggs" class="rounded-circle mr-2" />
                  Jimi Bloggs <span class="text-primary font-weight-bold">/</span> <a href="#">@mrjimi</a>
                </small>
              </blockquote>
            </div>
            <div class="col-md-4 d-md-flex">
              <blockquote class="blockquote-bubble text-center" data-animate="fadeIn" data-animate-delay="0.2">
                <p class="blockquote-bubble-content bg-white text-center">"10 out of 10, highly recommended!"</p>
                <small class="text-grey">
                  <img src="/i/assets/img/team/steve.jpg" alt="Jimi Bloggs" class="rounded-circle mr-2" />
                  Steve Bloggs <span class="text-primary font-weight-bold">/</span> <a href="#">Founder of Apple</a>
                </small>
              </blockquote>
            </div>
            <div class="col-md-4 d-md-flex">
              <blockquote class="blockquote-bubble text-center" data-animate="fadeIn" data-animate-delay="0.3">
                <p class="blockquote-bubble-content bg-white text-center">"Our productivity & sales are up! Couldn't be happier with this product!"</p>
                <small class="text-grey">
                  <img src="/i/assets/img/team/adele.jpg" alt="Adele Bloggs" class="rounded-circle mr-2" />
                  Adele Bloggs <span class="text-primary font-weight-bold">/</span> <a href="#">@iamadele</a>
                </small>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ======== @Region: #content-below ======== -->
    <div id="content-below">
      <!-- Awesome features call to action -->
      <div class="bg-primary text-white py-4">
        <div class="container">
          <div class="row text-center text-lg-left">
            <div class="col-12 col-lg-7 py-2">
              <h2 class="text-uppercase font-weight-bold mt-0 mb-2">
                <span class="text-shadow">Awesome</span> <span class="text-primary-darkend">Features</span>
              </h2>
              <h5 class="text-faded">
                99.9% Uptime <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Free Upgrades <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Fully Responsive <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Bug Free 
              </h5>
            </div>
            <div class="col-12 col-lg-5 py-2 text-lg-right">
              <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-lg btn-primary btn-invert btn-rounded py-3 px-4">Get AppStrap Today<i class="fa fa-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ======== @Region: #footer ======== -->
    <footer id="footer" class="p-0">
      <div class="container pt-6 pb-5">
        <div class="row">
          <div class="col-md-4">
            <!--@todo: replace with company contact details-->
            <h4 class="text-uppercase text-white">
              Contact Us
            </h4>
            <address>
              <ul class="list-unstyled">
                <li>
                  <abbr title="Phone"><i class="fa fa-phone fa-fw"></i></abbr>
                  019223 8092344
                </li>
                <li>
                  <abbr title="Email"><i class="fa fa-envelope fa-fw"></i></abbr>
                  info@appstraptheme.com
                </li>
                <li>
                  <abbr title="Address"><i class="fa fa-home fa-fw"></i></abbr>
                  Sunshine House, Sunville. SUN12 8LU.
                </li>
              </ul>
            </address>
          </div>
          
          <div class="col-md-4">
            <h4 class="text-uppercase text-white">
              About Us
            </h4>
            <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
          </div>
          
          <div class="col-md-4">
            <h4 class="text-uppercase text-white">
              Newsletter
            </h4>
            <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
            <!--@todo: replace with mailchimp code-->
            <form>
              <div class="input-group">
                <label class="sr-only" for="email-field">Email</label>
                <input type="text" class="form-control" id="email-field" placeholder="Email">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">Go!</button>
                </span>
              </div>
            </form>
          </div>
        </div>
        
      </div>
      <hr class="my-0 hr-blank op-2" />
      <!--@todo: replace with company copyright details-->
      <div class="bg-inverse-dark text-sm py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="mb-0">Site template by <a href="appstraptheme.com" class="footer-link">AppStrap</a> | Copyright 2018 &copy; AppStrap</p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline footer-links float-md-right mb-0">
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <a href="#top" class="btn btn-icon btn-dark pos-fixed pos-b pos-r mr-3 mb-3 scroll-state-hidden" title="Back to top" data-scroll="scroll-state"><i class="fa fa-chevron-up"></i></a>
        </div>
      </div>
    </footer>
    <!-- Style switcher - demo only - @todo: remove in production -->
    <div class="colour-switcher">
      <a href="#" class="colour-switcher-toggle" data-toggle="class" data-target=".colour-switcher"> <i class="fa fa-paint-brush"></i> </a>
      <h5 class="text-uppercase my-0">
        Theme Colours
      </h5>
      <hr />
      <div class="theme-colours"> <a href="#green" class="green active" data-toggle="tooltip" data-placement="right" data-original-title="Green (Default)">Green</a> <a href="#red" class="red" data-toggle="tooltip" data-placement="right" data-original-title="Red">Red</a> <a href="#blue" class="blue" data-toggle="tooltip" data-placement="right" data-original-title="Blue">Blue</a> <a href="#purple" class="purple" data-toggle="tooltip" data-placement="right" data-original-title="Purple">Purple</a> <a href="#pink" class="pink" data-toggle="tooltip" data-placement="right" data-original-title="Pink">Pink</a> <a href="#orange" class="orange" data-toggle="tooltip" data-placement="right" data-original-title="Orange">Orange</a> <a href="#lime" class="lime" data-toggle="tooltip" data-placement="right" data-original-title="Lime">Lime</a> <a href="#blue-dark" class="blue-dark" data-toggle="tooltip" data-placement="right" data-original-title="Blue-dark">Blue-dark</a> <a href="#red-dark" class="red-dark" data-toggle="tooltip" data-placement="right" data-original-title="Red-dark">Red-dark</a> <a href="#brown" class="brown" data-toggle="tooltip" data-placement="right" data-original-title="Brown">Brown</a> <a href="#cyan-dark" class="cyan-dark" data-toggle="tooltip" data-placement="right" data-original-title="Cyan-dark">Cyan-dark</a> <a href="#yellow" class="yellow" data-toggle="tooltip" data-placement="right" data-original-title="Yellow">Yellow</a> <a href="#slate" class="slate" data-toggle="tooltip" data-placement="right" data-original-title="Slate">Slate</a> <a href="#olive" class="olive" data-toggle="tooltip" data-placement="right" data-original-title="Olive">Olive</a> <a href="#teal" class="teal" data-toggle="tooltip" data-placement="right" data-original-title="Teal">Teal</a> <a href="#green-bright" class="green-bright" data-toggle="tooltip" data-placement="right" data-original-title="Green-bright">Green-bright</a> </div>
      <hr />
      <p class="text-xs text-muted">Cookies are NOT enabled so colour selection is not persistent.</p>
      <p class="text-xs my-0"><a href="index.html">Back to main homepage</a></p>
      <p class="text-xs my-0"><a href="intro.html">Back to intro page</a></p>
    </div>
    <!--Hidden elements - excluded from jPanel Menu on mobile-->
    <div class="hidden-elements jpanel-menu-exclude">
      <!--@modal - signup modal-->
      <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">
                Sign Up
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <form action="signup.html">
                <div class="form-group">
                  <h5>
                    Price Plan
                  </h5>
                  <select class="form-control">
                    <option>Basic</option>
                    <option>Pro</option>
                    <option>Pro +</option>
                  </select>
                </div>
                <hr />
                
                <h5>
                  Account Information
                </h5>
                <div class="form-group">
                  <label class="sr-only" for="signup-first-name">First Name</label>
                  <input type="text" class="form-control" id="signup-first-name" placeholder="First name">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="signup-last-name">Last Name</label>
                  <input type="text" class="form-control" id="signup-last-name" placeholder="Last name">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="signup-username">Userame</label>
                  <input type="text" class="form-control" id="signup-username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="signup-email">Email address</label>
                  <input type="email" class="form-control" id="signup-email" placeholder="Email address">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="signup-password">Password</label>
                  <input type="password" class="form-control" id="signup-password" placeholder="Password">
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" value="term" class="form-check-input">
                    I agree with the Terms and Conditions. 
                  </label>
                </div>
                <hr />
                <button class="btn btn-primary" type="submit">Sign up</button>
              </form>
            </div>
            <div class="modal-footer">
              <small>Already signed up? <a href="login.html">Login here</a>.</small>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
      <!--@modal - login modal-->
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">
                Login
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <form action="login.html">
                <div class="form-group">
                  <label class="sr-only" for="login-email">Email</label>
                  <input type="email" id="login-email" class="form-control email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="login-password">Password</label>
                  <input type="password" id="login-password" class="form-control password" placeholder="Password">
                </div>
                <button type="button" class="btn btn-primary">Login</button>
              </form>
            </div>
            <div class="modal-footer">
              <small>Not a member? <a href="#" class="signup">Sign up now!</a></small>
              <br />
              <small><a href="#">Forgotten password?</a></small>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>
    
    
    <!--jQuery 3.2.1 via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Popper 1.12.3 via CDN, needed for Bootstrap Tooltips & Popovers -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    
    <!-- Bootstrap v4.0.0-beta.3 JS via CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    
    
    <!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->
    
    <!--Custom scripts & AppStrap API integration -->
    <script src="/i/assets/js/custom-script.js"></script>
    <!--AppStrap scripts mainly used to trigger libraries/plugins -->
    <script src="/i/assets/js/script.min.js"></script>
  </body>
</html>