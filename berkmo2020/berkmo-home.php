<?php /* Template Name: BerkMo Home */ ?>

<?php get_header(); ?>
<div id="teamphoto">
<main id="content">
<h1>Welcome to Berkeley Morris</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>