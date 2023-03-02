<aside id="sidebar">
<div id="sidebar-content">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="footer-logo">
	<img src="<?php echo get_template_directory_uri() . '/images/berkmo-logo.png' ?>" alt="Berkeley Morris logo">
</div>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<div id="secondary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
</ul>
</div>
<div id="tertiary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'tertiary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</div>
</aside>