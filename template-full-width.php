<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>
  
  <div class="main-container">
    <div class="header-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          
          <main class="main small-12 medium-12 large-12 cell" role="main">
				
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php //get_template_part( 'parts/loop', 'page' ); ?>
            <?php endwhile; endif; ?>							

          </main> <!-- end #main -->
          
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
