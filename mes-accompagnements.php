<?php

/*
  Template Name: mes-accompagnements
*/

get_header(); ?>
<section class="page">
        <div class="wrapper">
               

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; else: endif; ?>

        </div>




</section>




<?php get_footer(); ?>