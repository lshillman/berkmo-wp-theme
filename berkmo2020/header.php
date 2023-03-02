<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="header-content">
<div id="branding">
<div id="site-title">
<?php // if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><!--removed homepage h1-->
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php // echo esc_html( get_bloginfo( 'name' ) ); ?><?php echo file_get_contents(get_template_directory_uri() . "/images/berkmo-masthead.svg"); ?></a>
<?php // if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
</div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu">
<div id="search"><?php get_search_form(); ?></div>
<button id="mobileMenuBtn" onclick="toggleMobileNav()">MENU</button>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_id' => 'desktopNavMenu' ) ); ?>
<div id="mobilenav-container" style="display:none;">
	<?php wp_nav_menu( array( 'theme_location' => 'primary-res-navigation', 'menu_id' => 'mobileNavMenu', 'menu_class' => 'responsive-navigation') ); ?>
</div>
</nav>
</div>
<script type="text/javascript">
function toggleMobileNav() {
  var x = document.getElementById("mobilenav-container");
  var y = document.getElementById("mobile-nav-overlay");
  if (x.style.display === "none") {
    x.style.display = "block";
	y.style.display = "block";
  } else {
    x.style.display = "none";
	y.style.display = "none";
  }
} 	
</script>

</header>
<div id="mobile-nav-overlay" onclick="toggleMobileNav()"></div>
<div id="container">