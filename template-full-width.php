<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>
  
  <div class="main-container">
    <!-- Action Block 1 -->
    <div class="action-block1" id="action-block1">
      
      <!-- Tier 1: Sign Petition CTA -->
      <div class="grid-container tier1">
        <div class="grid-x grid-padding-x">
          <div class="medium-6 large-6 cell">
            <h2>ask our <br>legislative leaders to <br><b>help babies thrive</b></h2>
            <p>Your voice is powerful. Share it. Without it, critical care for infants and children could halt. Join the cause now.</p>
            <button class="pinkBtn"><a href="#petition-block">Sign the petition</a></button>
          </div>
          <div class="medium-6 large-6 cell m_video">
            <a data-open="vanessa_modal" aria-controls="vanessa_modal" aria-haspopup="true" tabindex="7">
              <i class="fab fa-youtube m_click"></i>
              <img src="https://everybabycountsnv.org/wp-content/uploads/2018/11/michellestory.jpg" alt="Watch Michelle's Story">
            </a>
            <a data-open="vanessa_modal" aria-controls="vanessa_modal" aria-haspopup="true" tabindex="8" class="captiontitle">
              <span>see <b>Vanessa's</b> story <i class="fab fa-youtube"></i></span>
            </a>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="reveal" id="vanessa_modal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out" data-reset-on-close="true">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/WUSiuADYICM?cc_load_policy=1&enablejsapi=1&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <button class="close-button" data-close aria-label="Close modal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    </div>
    
    <!-- Action Block 2 -->
    <div class="action-block2" id="action-block2">
      
      <!-- Tier 2: Take Action columns -->
      <div class="grid-container tier2">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2>take <b>action</b></h2>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="medium-3 large-3 cell">
            <a href="#petition-block"><h3>sign the <br><b>petition</b></h3></a>
            <p>Please sign your name to this cause. Every signature counts.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <a href="#petition-block"><h3>opt in for <br><b>updates</b></h3></a>
            <p>Opt in for email, and we'll send you updates on our progress.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <a href="#letter-block"><h3>send a <br><b>letter</b></h3></a>
            <p>We wrote it. You sign it. We'll help you send it to your representatives.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <a href="#share-block"><h3>share for a <br><b>solution</b></h3></a>
            <p>Spread the word. Share this page on social media with your friends and family.</p>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Action Blocks -->
    
    <!-- Petition Block -->
    <div class="petition-block" id="petition-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell formblock">
            <h2><b>sign</b> the petition</h2>
            <p>By signing this petition, you are stating that you want critical care services for infants and children to remain in Nevada by asking legislators to support a fair and equitable distribution of Medicaid reimbursements.</p>
            <?php echo do_shortcode("[caldera_form id='CF5bb525f2c8f98']"); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Petition Block -->

    <!-- Letter Block -->
    <div class="letter-block" id="letter-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
          <h2>send a <b>letter</b></h2>
            <!-- VOTER VOICE TEST -->
            <script type="text/javascript" src="https://www.votervoice.net/Scripts/Cg0AAAAAAAA/Plugin.js?app=campaigns"></script><vv:main></vv:main>
            <!-- END VOTER VOICE -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Letter Block -->

    <!-- Video Block -->
    <div class="lastvideo-block" id="lastvideo-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2><b>no child</b> is immune from need</h2>
            <a data-open="michelle_modal" aria-controls="michelle_modal" aria-haspopup="true" tabindex="12">
              <i class="fab fa-youtube v_click"></i>
              <img src="https://everybabycountsnv.org/wp-content/uploads/2018/11/vanessastory.jpg" alt="Watch Vanessa's Story">
            </a>
            <a data-open="michelle_modal" aria-controls="michelle_modal" aria-haspopup="true" tabindex="12" class="captiontitle2">
              <span>see <b>Michelle's</b> story <i class="fab fa-youtube"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- modal -->
    <div class="reveal" id="michelle_modal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out" data-reset-on-close="true">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/zesr_rlF2l8?cc_load_policy=1&enablejsapi=1&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!-- Video Block -->

    <!-- Share Block -->
    <div class="share-block" id="share-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2><b>share</b> for a solution</h2>
            <p>Share this campaign with your friends and family</p>
            <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Share Block -->

    <!-- Testimonials Block -->
    <div class="testimonials-block" id="testimonials-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2><b>testimonials</b></h2>
            <p>&ldquo;If we (Nevadans) didn't have the services that Sunrise has provided for Roman, I don't think he would have made it.&rdquo; – Vanessa M., Mother</p>
            <p>&ldquo;There's nowhere else these families can go, they shouldn't have to go anywhere else. They should be able to get the treatment they need right here in their home (Nevada).&rdquo; – Arthur I., PICU Nurse Leader</p>
            <p>&ldquo;Without the hospital's help, I wouldn't have my kids. It's extremely important that they prioritize this for people like me.&rdquo; – Brooklynn B., Mother</p>
            <p>&ldquo;This is a community resource that we can be proud of, and can support our families throughout the state (Nevada).&rdquo; – Patricia Ramsay, NICU Medical Director</p>
            <p>&ldquo;We provide services nobody else in the state (Nevada) provides.&rdquo; – Caren Lipsky, Staff Neonatologist</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials Block -->

    <!-- Press Block -->
    <div class="testimonials-block orange_version" id="testimonials-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2><b>press</b></h2>
            <p>In a <em>Nevada Independent</em> Dec. 11, 2018 article titled <strong>“Sunrise Highlights Neonatal Care in Campaign to Increase Medicaid Reimbursement Rates”</strong> Megan Messerly writes that 75% of the babies in Sunrise’s neonatal intensive care unit are on Medicaid and the hospital treats 1,000 babies in the NICU yearly. As a safety net hospital, Sunrise provides care to Southern Nevada’s sickest patients. The article explains that if Sunrise doesn’t receive additional financial help via an increase in Medicaid reimbursement rates, it will not be able to continue providing its current services. To educate the public and legislators on the need for increased Medicaid reimbursement, Sunrise has launched the Every Baby Counts NV campaign. It hopes to shrink the millions it lost on Medicaid billings last year, which is a 91% increase in losses since 2012. <a href="https://thenevadaindependent.com/article/sunrise-highlights-neonatal-care-in-campaign-to-increase-medicaid-reimbursement-rates/" target="_blank" rel="noopener">Read More <i class="far fa-external-link"></i></a></p>
            <hr>
            <p><a href="/press"><i class="fal fa-newspaper"></i> See all press coverage</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Press Block -->
    
  </div>

<?php get_footer(); ?>
