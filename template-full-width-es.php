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
              <img src="https://assets.everybabycountsnv.org/wp-content/uploads/2018/11/13141137/michellestory.jpg">
            </a>
            <a data-open="vanessa_modal" aria-controls="vanessa_modal" aria-haspopup="true" tabindex="8" class="captiontitle">
              <span>Ve la historia de <b>Vanessa</b> <i class="fab fa-youtube"></i></span>
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
            <h2>enviar una <b>carta</b></h2>
            <p>Hemos redactado una carta. Puede editarlo para agregar cualquier sentimiento personal que desee. Haga clic en "Enviar" debajo de la carta para enviarla a su estado y representantes locales.</p>
            <div class="letterbox">
              <div class="letterreset" id="letterreset"><i class="fal fa-redo"></i> reiniciar</div>
              <div class="instructions"><i class="fal fa-pencil"></i> Edite la carta haciendo clic / tocando abajo</div>
              <hr>
              <p class="hidden-date"><?php echo date('F jS, Y'); ?></p>
              <div class="editabletxt" id="letterbox" contenteditable="true">
                <p><span>A quien le corresponda,</span></p>
                <p><span>La atención crítica, vital y avanzada que muchos de los ciudadanos más pequeños y enfermos de Nevada reciben en la Unidad de cuidados intensivos neonatales de Hospital Sunrise y otros departamentos pediátricos son importantes para nuestro estado. Como el único hospital en Nevada completamente equipado para tratar a los bebés más enfermos y pequeños de nuestro estado y el proveedor de servicios de Medicaid más grande del estado, el Hospital Sunrise desempeña un papel importante en la salud de algunas familias de Nevada.</span></p>
                <p><span>Para garantizar que se puedan seguir brindando estos servicios críticos a las familias, los niños y los bebés en Nevada, solicito su apoyo, ya que el hospital busca una distribución justa y equitativa de los reembolsos de Medicaid acordes con los servicios que brinda. Para mí es importante que los bebés y los niños más enfermos de Nevada continúen recibiendo la atención crítica y vital que necesitan para sobrevivir y prosperar.</span></p>
                <p class="hide-on-print"><span>(Escriba sus propias palabras aquí o en cualquier lugar a lo largo de esta carta.)</span></p>
                <p><span>Firma,</span></p>
              </div>

              <!-- LETTER FORM -->
              <div class="letter-requirements" id="letter-requirements">
                <form class="ltr-sender" id="ltr-sender">
                  <input type="hidden" name="g-recaptcha-response" id="gkey" value="">
                  <input type="hidden" name="letter-content-text" id="letter-content-text" value="">
                  <div class="fields grid-x grid-padding-x">
                    <div class="small-12 medium-4 large-4 cell">
                      <label for="fname_letter">Su nombre<sup>*</sup></label>
                      <input type="text" id="fname_letter" name="fname_letter">
                    </div>
                    <div class="small-12 medium-4 large-4 cell">
                      <label for="lname_letter">Su apellido<sup>*</sup></label>
                      <input type="text" id="lname_letter" name="lname_letter">
                    </div>
                    <div class="small-12 medium-4 large-4 cell">
                      <label for="email_letter">Su correo electrónico<sup>*</sup></label>
                      <input type="email" id="email_letter" name="email_letter">
                    </div>
                  </div>
                  <div class="fields grid-x grid-padding-x">
                    <div class="small-12 medium-12 large-12 cell letter-req">
                      <sup>*</sup> Denota un campo requerido
                    </div>
                  </div>
                  <div class="g-recaptcha" id="g-recaptcha"></div>
                  <div class="submit_letter grid-x grid-padding-x" id="submit_letter">
                    <div class="small-12 medium-4 large-4 cell">
                      <div class="submit_btn_letter inactive" data-state="inactive" id="ltr_submit"><i class="fal fa-envelope-open"></i> envíe su carta</div>
                    </div>
                    <div class="small-12 medium-8 large-8 cell acknowledgment">
                      <p>Al hacer clic en "enviar su carta", usted reconoce que su carta no es comercial, contiene contenido respetuoso y es apropiado para ser entregada a su representante estatal / local de Nevada.</p>
                    </div>
                  </div>
                </form>
              </div>
              <!-- LETTER FORM -->

              <div class="completed-letter" id="completed_letter">
                <p class="yourname" id="your_name_completed"></p>
                <hr>
                <p class="thank-you">Gracias por agregar tu voz. Juntos podemos asegurar el cuidado de cada bebé en el sur de Nevada.</p>
              </div>

            </div>
            <div class="printtxt" id="printtxt">
              <i class="fal fa-print"></i> Imprima la carta
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
              <img src="https://assets.everybabycountsnv.org/wp-content/uploads/2018/11/13141137/vanessastory.jpg">
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
            <h2><b>compartir</b> para una solución</h2>
            <p>Comparte esta campaña con tus amigos y familiares.</p>
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
