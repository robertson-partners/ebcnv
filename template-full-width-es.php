<?php
/*
Template Name: Full Width SPANISH
*/

get_header(); ?>
  
  <div class="main-container">
    <!-- Action Block 1 -->
    <div class="action-block1" id="action-block1">
      
      <!-- Tier 1: Sign Petition CTA -->
      <div class="grid-container tier1">
        <div class="grid-x grid-padding-x">
          <div class="medium-6 large-6 cell">
            <h2>pregunta a nuestros <br>líderes legislativos para <br><b>ayudar a los bebés a prosperar</b></h2>
            <p>Tu voz es poderosa. Compártelo. Sin ella, los cuidados críticos para bebés y niños podrían detenerse. Únete a la causa ahora.</p>
            <button class="pinkBtn"><a href="#petition-block">Fimar la petición</a></button>
          </div>
          <div class="medium-6 large-6 cell m_video">
            <a data-open="vanessa_modal" aria-controls="vanessa_modal" aria-haspopup="true" tabindex="7">
              <i class="fab fa-youtube m_click"></i>
              <img src="https://everybabycountsnv.org/wp-content/uploads/2018/11/michellestory.jpg">
            </a>
            <a data-open="vanessa_modal" aria-controls="vanessa_modal" aria-haspopup="true" tabindex="8" class="captiontitle">
              <span>Ve la historia de <b>Vanessa</b> <i class="fab fa-youtube"></i></span>
            </a>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="reveal" id="vanessa_modal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out" data-reset-on-close="true">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/WUSiuADYICM?cc_lang_pref=es&cc_load_policy=1&enablejsapi=1&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <h2>tome <b>acción</b></h2>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="medium-3 large-3 cell">
            <a href="#petition-block"><h3>firme la <br><b>petición</b></h3></a>
            <p>Por favor, firme su nombre parar esta causa. Cada firma cuenta.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <a href="#petition-block"><h3>optar por <br><b>actualizaciones</b></h3></a>
            <p>Opte por correo electrónico y le enviaremos actualizaciones sobre nuestro progreso.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <a href="#letter-block"><h3>enviar una <br><b>carta</b></h3></a>
            <p>Lo escribimos. Tu lo firmas Te ayudaremos a enviarlo a tus representantes.</p>
          </div>
          <div class="medium-3 large-3 cell">
            <a href="#share-block"><h3>compartir para una <br><b>solución</b></h3></a>
            <p>Difundir la palabra. Comparte esta página en las redes sociales con tus amigos y familiares.</p>
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
            <h2><b>firma</b> la petición</h2>
            <p>Al firmar esta petición, usted declara que desea que los servicios de cuidados críticos para bebés y niños permanezcan en Nevada.</p>
            <?php echo do_shortcode("[caldera_form id='CF5c2e79306d663']"); ?>
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
          <h2>enviar una <b>carta</b></h2>
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
            <h2><b>ningún niño</b> es inmune a la necesidad</h2>
            <a data-open="michelle_modal" aria-controls="michelle_modal" aria-haspopup="true" tabindex="12">
              <i class="fab fa-youtube v_click"></i>
              <img src="https://everybabycountsnv.org/wp-content/uploads/2018/11/vanessastory.jpg">
            </a>
            <a data-open="michelle_modal" aria-controls="michelle_modal" aria-haspopup="true" tabindex="12" class="captiontitle2">
              <span>Vea la historia de <b>Michelle</b> <i class="fab fa-youtube"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- modal -->
    <div class="reveal" id="michelle_modal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out" data-reset-on-close="true">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/zesr_rlF2l8?cc_lang_pref=es&cc_load_policy=1&enablejsapi=1&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <h2><b>compartir</b> para una solución</h2>
            <p>Comparte esta campaña con tus amigos y familiares.</p>
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
            <h2><b>testimonios</b></h2>
            <p>&ldquo;Si nosotros (los nevadenses) no tuviéramos los servicios que Sunrise ha prestado a Roman, no creo que lo hubiera logrado.&rdquo; – Vanessa M., madre</p>
            <p>&ldquo;No hay ningún otro lugar donde estas familias puedan ir, no deberían tener que ir a ningún otro lugar". Deben poder recibir el tratamiento que necesitan aquí mismo en su hogar (Nevada).&rdquo; – Arthur I., enfermera líder de PICU</p>
            <p>&ldquo;Sin la ayuda del hospital, no tendría a mis hijos. Es extremadamente importante que den prioridad a esto para las personas como yo.&rdquo; – Brooklynn B., madre</p>
            <p>&ldquo;Este es un recurso de la comunidad del que podemos sentirnos orgullosos y que podemos apoyar a nuestras familias en todo el estado (Nevada).&rdquo; – Patricia Ramsay, Directora Médica de NICU</p>
            <p>&ldquo;Brindamos servicios que nadie más en el estado (Nevada) brinda.&rdquo; – Caren Lipsky, personal de neonatología</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials Block -->
    
  </div>

<?php get_footer(); ?>
