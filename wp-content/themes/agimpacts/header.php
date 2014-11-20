<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agriculture Impacts</title>
    <meta name="description" content="CCAFS and University of Leeds, with the collaboration of other institutions (CSIRO, Stanford University) are developing a platform to facilitate the investigation of climate change impacts on agriculture. The database that will appear here has been used in the food chapters of the IPCC 4th and 5th assessment reports. The data consists of peer-reviewed literature reports on yield projections from crop simulation studies.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="CCAFS, University of Leeds, IPCC, CGIAR, etc">
    <meta name="language" content="en-us" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="classification" content="crowdsourcing, science, climate change" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <!--<meta name="google-site-verification" content="" />-->
    <meta name="robots" content="index, follow" />
    <!--<meta name="revisit-after" content="21 days" />-->
    <meta name="creator" content="Name,Designer,Email Address,or Company" />
    <meta name="publisher" content="CCAFS, CIAT" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validity.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.noty.packaged.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pure-min-custom.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.validity.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript">
      var templateUrl = '<?= get_bloginfo("url"); ?>';
    </script>
    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-56303729-1', 'auto');
      ga('send', 'pageview');

    </script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> > 
    <header> 
      <nav class="clearfix"> 
        <div class="row">
          <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]--> 
          <?php
          if (!is_user_logged_in()) {
            wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'main-menu'));
          } else {
            wp_nav_menu(array('theme_location' => 'menu-regitred', 'menu' => 'Menu user'));
          }
          ?>
          <div id="login" class="right">
            <?php dynamic_sidebar('secundario'); ?>
          </div>
        </div>
      </nav>
      <div class="row">
        <div id="ag-logo" class="left" ><a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/ag-logo.png"></a></div>
        <div id="partners-logo" class="right"><img src="<?php echo get_template_directory_uri(); ?>/img/partners-logo.png"></div>
      </div>
    </header>  
    <div id="content-menubar">
      <!--<div id="alert-div" class="row">ERROR </div>-->
      <div class="row">
        <ul id="breadcrumb" class="left">
          <!--<li>HOME</li>-->
        </ul>
<!--        <div id="search" class="right">
          <form class="pure-form">
            <input type="text" id="input-search" placeholder="Search" value="" />
            <button type="submit" id="btn-search" class="pure-button button-small">
              <i class="fa fa-search"></i> 
            </button>
          </form>
        </div>-->
      </div>
    </div>

