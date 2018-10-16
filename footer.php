<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
          <footer class="footer" role="contentinfo">
            
            <div class="grid-container">
              <div class="inner-footer grid-x grid-margin-x grid-padding-x">

                <div class="small-6 medium-4 large-4 cell">
                  <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
                </div>

                <div class="small-6 medium-8 large-8 cell">
                  <nav role="navigation">
                    <?php joints_footer_links(); ?>
                  </nav>
                </div>
              
              </div> <!-- end #inner-footer -->
            </div>
          
          </footer> <!-- end .footer -->
			
        </div>  <!-- end .off-canvas-content -->
      </div> <!-- end .off-canvas-wrapper -->		
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->