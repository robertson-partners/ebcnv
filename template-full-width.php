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
    
    <!-- Petition Block -->
    <div class="petition-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-7 large-7 cell formblock">
            <h2><b>sign</b> the petition</h2>
            <p>by signing this petition you are stating that you want funding to flow directly to the babies that need care.</p>
            <?php echo do_shortcode("[caldera_form id='CF5bb525f2c8f98']"); ?>
          </div>
          <div class="medium-5 large-5 cell signatureblock">
          </div>
        </div>
      </div>
    </div>
    <!-- Petition Block -->

    <!-- Letter Block -->
    <div class="letter-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2>send a <b>letter</b></h2>
            <p>we've put together a letter. follow the steps below to send one to your representative.</p>
            <div class="letterbox">
              <div class="letterreset" id="letterreset"><i class="fal fa-redo"></i> start over</div>
              <div class="editabletxt" id="letterbox" contenteditable="true">
                <p><b>To whom it may concern,</b></p>
                <p>The critical, life-saving and advanced care many of Nevada's smallest and sickest citizens receive at Sunrise Hospital's Neonatal Intensive Care Unit and other pediatric departments is important to our community. As the only hospital in Southern Nevada fully equipped to treat our state's sickest and smallest babies, and the largest provider of Medicaid services in our state, Sunrise Hospital plays an important roles in the health of Nevada families.</p>
                <p>To ensure these critical services can continue to be provided to families, children and babies in Southern Nevada, I ask for your support as the hospital seeks a fair and equitable distribution of Medicaid reimbursements commensurate with the services it provides. It matters to me that our community's sickest babies and children continue to receive the critical, life-saving care they need to survive and thrive.</p>
                <p>(Write your own words here, or anywhere throughout this letter.)</p>
                <p>Signed,</p>
                <p>(Your name here)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Letter Block -->

    <!-- Share Block -->
    <div class="share-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2><b>share</b> for a solution</h2>
            <p>Share this campaign with your friends and family</p>
            <ul class="shareoptions">
              <li><i class="fab fa-facebook-f"></i></li>
              <li><i class="fab fa-twitter"></i></li>
              <li><i class="fab fa-linkedin-in"></i></li>
              <li><i class="fal fa-envelope"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Share Block -->


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
