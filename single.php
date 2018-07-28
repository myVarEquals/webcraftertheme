<?php

//Display Page when viewing a single post

get_header();

// While there are posts...
while(have_posts()) {
    // Get that post...
    the_post(); ?>
    <!-- Post Title -->
    <h2><?php the_title(); ?></h2>
    <!-- Post Content -->
    <p><?php the_content(); ?></p>
    <?php
  }

get_footer();

?>
