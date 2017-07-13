<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="site-header row">
      <div class="large-6 columns">
        <?php
          if(function_exists('the_custom_logo')) {
              the_custom_logo();
          }
          ?>
      </div>
      <div class="large-6 columns">
          <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'container_class' => 'menu simple main-nav site-header__main-nav'
            )); ?>
      </div>
    </div>
      <?php if(is_active_sidebar('showcase')) : ?>
    <div class="row showcase">
      <div class="large-12 columns">
        <div class="callout showcase__callout secondary">
          <?php dynamic_sidebar('showcase'); ?>
        </div>
      </div>
    </div>
      <?php endif; ?>
    <div class="row">
      <div class="large-8 medium-8 columns">
      	<div class="products">
        	<div class="large-4 medium-4 small-12 columns product end">
            	<h3>Blue Shirt</h3>
                <h4>$9.99</h4>
                <img src="img/shirt_blue_white.jpg" />
                <button class="button">Details</button>
            </div>
            <div class="large-4 medium-4 small-12 columns product end">
            	<h3>Red Hat</h3>
                <h4>$9.99</h4>
                <img src="img/red_hat.jpg" />
                <button class="button">Details</button>
            </div>
            <div class="large-4 medium-4 small-12 columns product end">
            	<h3>Black Shirt</h3>
                <h4>$9.99</h4>
                <img src="img/shirt_black.jpg" />
                <button class="button">Details</button>
            </div>
            <div class="large-4 medium-4 small-12 columns product end">
            	<h3>Orange Shirt</h3>
                <h4>$9.99</h4>
                <img src="img/shirt_orange.jpg" />
                <button class="button">Details</button>
            </div>
            <div class="large-4 medium-4 small-12 columns product end">
            	<h3>Grey Shirt</h3>
                <h4>$9.99</h4>
                <img src="img/shirt_grey.jpg" />
                <button class="button">Details</button>
            </div>
        </div>
      </div>
      <div class="large-4 medium-4 columns">
       	<div class="callout">
        	<h3>Categories</h3>
            <ul class="menu vertical">
            	<li><a href="#">Shirts</a></li>
                <li><a href="#">Pants</a></li>
                <li><a href="#">Hats</a></li>
                <li><a href="#">Shoes</a></li>
            </ul>
        </div>
        <br />
        <div class="callout">
        	<h5>So many components, girl!</h5>
            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out.</p>
            <a href="#" class="small button">Check it out!</a>
        </div>
      </div>
    </div>
    
    <footer>
    	<p>&copy; 2017 - MyShop
    </footer>
    <?php wp_footer(); ?>
    <script src="dev-stuff/assets/js/vendor/jquery.js"></script>
    <script src="dev-stuff/assets/js/vendor/what-input.js"></script>
    <script src="dev-stuff/assets/js/vendor/foundation.js"></script>
    <script src="dev-stuff/assets/js/app.js"></script>
  </body>
</html>