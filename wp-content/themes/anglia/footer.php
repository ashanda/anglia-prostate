<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anglia
 */

?>
				<div id="footer-wrapper">				
					<div class="page-width">
					<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'main-menu',
									)
								);
								?>
						<img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/logo2.png" alt="" width="" height=""/> 
						<p>&copy; Anglia Prostate | all rights reserved <br/><?php the_field('company_telephone_number','option')?> | <a href="mailto:<?php the_field('company_email','option')?>"><?php the_field('company_email','option')?></a></p>
					</div><!--page width end-->
				</div><!--footer wrapper end-->		
			
		</div><!--main wrapper end-->
		
		<!--script-->		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/lightslider/src/js/lightslider.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/ui.js"></script>
		
		<script src="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/parallax.js-1.5.0/parallax.js"></script>
		<script type="text/javascript">
			$('.parallax-window').parallax({imageSrc: '<?php echo get_template_directory_uri(); ?>/inc_files/images/banner2.jpg'});
		</script>
		<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
		<?php wp_footer(); ?>		
	</body>
</html>

