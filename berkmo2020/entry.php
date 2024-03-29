<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( is_singular() ) {
	the_title( '<h1 class="entry-title singular">', '</h1>' );
} else {
	echo '<h2 class="entry-title plural"><a href="', the_permalink(), '" title="', the_title_attribute(), '" rel="bookmark">', the_title(), '</a></h2>';
} ?>

<?php edit_post_link(); ?>
<?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
</header>
<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>