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
            <h2>Ask our <br>legislative leaders to <br><b>help babies thrive</b></h2>
            <p>Your voice is powerful. Share it. Without it, critical care for infants and children could halt. Join the cause now.</p>
            <button class="pinkBtn"><a href="#petition-block">Sign the petition</a></button>
          </div>
          <div class="medium-6 large-6 cell">
            <img src="https://assets.everybabycountsnv.org/wp-content/uploads/2018/10/29123409/mom-baby.jpg">
          </div>
        </div>
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
            <p>By signing this petition, you are stating that you want critical care services for infants and children to remain in Nevada.</p>
            <?php echo do_shortcode("[caldera_form id='CF5bb525f2c8f98']"); ?>
          </div>
          <div class="medium-5 large-5 cell signatureblock">
            <h2><b>32,942</b><br>have signed</h2>
            <ul class="signatories">
              <li>Thomas M. in 89135</li>
              <li>Linda C. in 89112</li>
              <li>Fritz L. in 89030</li>
              <li>Elvis P. in 89101</li>
              <li>Barack O. in 60007</li>
              <li>Taytay S. in 37011</li>
              <li>Elvis P. in 89101</li>
              <li>Barack O. in 60007</li>
              <li>Taytay S. in 37011</li>
              <li>Elvis P. in 89101</li>
              <li>Barack O. in 60007</li>
            </ul>
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
            <p>We've put together a letter. You can edit it to add any personal sentiments you wish. Click "Submit" below the letter to send it to your state and local representatives.</p>
            <div class="letterbox">
              <div class="letterreset" id="letterreset"><i class="fal fa-redo"></i> start over</div>
              <div class="instructions"><i class="fal fa-pencil"></i> Edit the letter by clicking/tapping below</div>
              <hr>
              <p class="hidden-date"><?php echo date('F jS, Y'); ?></p>
              <div class="editabletxt" id="letterbox" contenteditable="true">
                <p><span>To whom it may concern,</span></p>
                <p><span>The critical, life-saving and advanced care many of Nevada’s smallest and sickest citizens receive at Sunrise Hospital’s Neonatal Intensive Care Unit and other pediatric departments is important to our state. As the only hospital in Nevada fully equipped to treat our state’s sickest and smallest babies and the state’s largest provider of Medicaid services, Sunrise Hospital plays an important role in the health of Nevada families.</span></p>
                <p><span>To ensure these critical services can continue to be provided to families, children and babies in Nevada, I ask for your support as the hospital seeks a fair and equitable distribution of Medicaid reimbursements commensurate with the services it provides. It matters to me that Nevada’s sickest babies and children continue to receive the critical, life-saving care they need to survive and thrive.</span></p>
                <p class="hide-on-print"><span>(Write your own words here or anywhere throughout this letter.)</span></p>
                <p><span>Signed,</span></p>
              </div>

              <!-- LETTER FORM -->
              <div class="letter-requirements" id="letter-requirements">
                <form class="ltr-sender" id="ltr-sender">
                  <input type="hidden" name="g-recaptcha-response" id="gkey" value="">
                  <input type="hidden" name="letter-content-text" id="letter-content-text" value="">
                  <div class="fields grid-x grid-padding-x">
                    <div class="small-12 medium-4 large-4 cell">
                      <label for="fname_letter">Your First Name<sup>*</sup></label>
                      <input type="text" id="fname_letter" name="fname_letter">
                    </div>
                    <div class="small-12 medium-4 large-4 cell">
                      <label for="lname_letter">Your Last Name<sup>*</sup></label>
                      <input type="text" id="lname_letter" name="lname_letter">
                    </div>
                    <div class="small-12 medium-4 large-4 cell">
                      <label for="email_letter">Your Email Address<sup>*</sup></label>
                      <input type="email" id="email_letter" name="email_letter">
                    </div>
                  </div>
                  <div class="fields grid-x grid-padding-x">
                    <div class="small-12 medium-12 large-12 cell letter-req">
                      <sup>*</sup> Denotes a required field
                    </div>
                  </div>
                  <div class="g-recaptcha" id="g-recaptcha"></div>
                  <div class="submit_letter grid-x grid-padding-x" id="submit_letter">
                    <div class="small-12 medium-4 large-4 cell">
                      <div class="submit_btn_letter inactive" data-state="inactive" id="ltr_submit"><i class="fal fa-envelope-open"></i> submit your letter</div>
                    </div>
                    <div class="small-12 medium-8 large-8 cell acknowledgment">
                      <p>By clicking "submit your letter", you acknowledge that your letter is non-commercial, contains respectful content and is appropriate to be delivered to your state/local respresentative of Nevada.</p>
                    </div>
                  </div>
                </form>
              </div>
              <!-- LETTER FORM -->

              <div class="completed-letter" id="completed_letter">
                <p class="yourname" id="your_name_completed"></p>
                <hr>
                <p class="thank-you">Thank you for adding your voice. Together we can ensure care for every baby in Southern Nevada.</p>
              </div>

            </div>
            <div class="printtxt" id="printtxt">
              <i class="fal fa-print"></i> print letter
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Letter Block -->

    <!-- Share Block -->
    <div class="share-block" id="share-block">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-12 large-12 cell">
            <h2><b>share</b> for a solution</h2>
            <p>Share this campaign with your friends and family</p>
            <?php
              if(function_exists('social_warfare')):
                social_warfare();
              endif;
            ?>
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
    
  </div>

<?php get_footer(); ?>
