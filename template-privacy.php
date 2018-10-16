<?php
/*
Template Name: Full Width Privacy
*/

get_header(); ?>
  
  <div class="main-container">
    <!-- Content Block -->
    <div class="content">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="small-12 medium-12 large-12 cell">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php get_template_part( 'parts/loop', 'page' ); ?>
            <?php endwhile; endif; ?>	
          </div>
        </div>
      </div>
    </div>
    <!-- Content Block -->    
  </div>

<?php get_footer(); ?>
