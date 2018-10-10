<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>
  
  <div class="main-container">
    <!-- Action Block 1 -->
    <div class="action-block1">
      
      <!-- Tier 1: Sign Petition CTA -->
      <div class="grid-container tier1">
        <div class="grid-x grid-padding-x">
          <div class="medium-6 large-6 cell">
            <h2>Ask our<br>legislative leaders to<br><b>help babies thrive</b></h2>
            <p>Your voice is powerful. Share it. Without it, neonatal intensive care unit hospital beds for our sickest babies are in jeopardy of closing. Join the cause now.</p>
            <button class="pinkBtn">Sign the petition</button>
          </div>
          <div class="medium-6 large-6 cell">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/temp/best-treats-for-kittens.jpg'; ?>">
          </div>
        </div>
      </div>
      
    </div>
    
    <!-- Action Block 2 -->
    <div class="action-block2">
      
      <!-- Tier 2: Take Action columns -->
      <div class="grid-container tier2">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2>take <b>action</b></h2>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="medium-3 large-3 cell">
            <h3>sign the<br><b>petition</b></h3>
            <p>please sign your name to this cause. every signature counts.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <h3>opt-in for<br><b>updates</b></h3>
            <p>opt-in for email and we'll send you updates on our progress.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <h3>send a<br><b>letter</b></h3>
            <p>we wrote it. you sign it. we'll send it to your representatives.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <h3>share for a<br><b>solution</b></h3>
            <p>spread the word. share this page on social media with your friends.</p>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Action Blocks -->
    
    <!--
    <div class="alt-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <main class="main small-12 medium-12 large-12 cell" role="main">
				
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php //get_template_part( 'parts/loop', 'page' ); ?>
            <?php endwhile; endif; ?>							

          </main>
        </div>
      </div>
    </div>
    -->
    
  </div>

<?php get_footer(); ?>
