<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
ssssssss
<?php endwhile;wp_reset_query();wp_reset_query();endif; ?>
<?php get_footer(); ?>