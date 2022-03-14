<?php
/*   Template Name: Home Page  */

 get_header();  
 
 ?> 

<div id="content-wrapper">			
					
				<div id="home-slider-container" class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('field_622eaca700e2b'); ?>">					
					
							
				<div class="slider-text">
									<h3><?php the_field('field_622eacf400e2c'); ?></h3>
									<h4><?php the_field('field_622ead0000e2d'); ?></h4>
									<p><?php the_field('field_622ead0d00e2e'); ?></p>
								</div>																
					<img class="content-deco" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/content-deco.png" alt="" width="" height=""/>	
				</div><!--home slider container end-->
				
				<div id="welcome-text-section">
					<div class="page-width">
					
						<h3 class="headings-text"><span><?php the_field('field_622eae6c56f46'); ?></span></h3>
						
						<div class="text-block left-align">
						<?php the_field('left_description'); ?> 

							
						</div>
						
						<div class="text-block right-align">
							<h3><?php the_field('right_title'); ?></h3>

							<?php the_field('right_description'); ?> 

								
						</div>	
					</div>
				</div><!--welcome text section end-->
				
				<div id="about-section" class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('about_the_surgeon_section_background_image'); ?>">
					<div class="top-deco"></div>
					<div class="bottom-deco"></div>
					
					<div class="page-width">
						<div class="text-block">
							<h3><?php the_field('field_622eb0ee9ca53'); ?></h3>
							<?php the_field('field_622eb0fb9ca54'); ?>

							
						</div>
					</div>
				</div><!--about section end-->
				
				<div id="problems-section">
					
					<div class="page-width">
						<h3 class="headings-text"><span><?php the_field('causes_of_urinary_title'); ?> </span></h3>
						<div class="text-block left-align">
							<p><?php the_field('left_side_short_description'); ?> </p>
							<?php if( have_rows('key_points') ): ?>
							<ul>
							<?php while( have_rows('key_points') ): the_row();?>
								<li>
								<?php the_sub_field('point'); ?>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
							
							<p><?php the_field('left_side_description'); ?> </p>
						</div>
						<div class="text-block right-align">
							<h4><?php the_field('right_side_title'); ?> </h4>
							<p><?php the_field('right_side_description'); ?> </p>	
						</div>
					</div>
				</div><!--problems section end-->
				
				<div id="treatments-section">
				<img class="arrow-deco" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/deco.png" alt="" width="" height=""/>	
					<div class="page-width">
						<div class="text-area">
							<h3 class="treatments-headings"><span class="left-align"></span><label><?php the_field('bph_title'); ?></label><span class="right-align"></span></h3>
							<p><?php the_field('bph_description_1'); ?></p>
							<h6><?php the_field('bph_sub_title'); ?></h6>
							<p><?php the_field('bph_description_2'); ?></p>
						</div>
						<?php if( have_rows('problems') ): ?>
							
							<?php while( have_rows('problems') ): the_row();?>
							<div class="treatments-blocks">	
							<img class="deco-icon" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/icon2.png" alt="" width="" height=""/>
							<div class="top-row">
								<h3><?php the_sub_field('problem_title'); ?></h3>
								<p><?php the_sub_field('problem_description'); ?><p>
							</div>
								
								<?php 

							
								// check for rows (sub repeater)
									if( have_rows('sub_problems') ):
											// loop through rows (sub repeater)
									while( have_rows('sub_problems') ): the_row();?>
							<div class="row">
								<h4><?php the_sub_field('sub_problem_title'); ?></h4>
								<?php the_sub_field('problem_description'); ?>
							</div>
							
											
										
							<?php endwhile; ?>
						<?php endif; ?>
						</div>
						<?php endwhile;?>
					<?php endif; ?>
					
					<div id="other-treatments-blocks">
							<h3 class="other-treatments-headings"><?php the_field('other_treatment_title'); ?></h3>
							<?php if( have_rows('other_treatments_on_the_horizon') ): ?>
									<?php while( have_rows('other_treatments_on_the_horizon') ): the_row();?>
										<div class="row">
											<h4><?php the_sub_field('other_treatments__title'); ?></h4>
											<p><?php the_sub_field('other_treatments_decription'); ?></p>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>					
						</div>
						
						
						
						
						
						
						
					</div>
				</div><!--treatments section end-->

				<div id="book-consultation">
				<img class="arrow-deco" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/deco2.png" alt="" width="" height=""/>	
					<div class="page-width">
						<h3 class="headings-text"><span><?php the_field('booking_title'); ?></span></h3>
						<div class="contact-details">
							<h6><?php the_field('booking_sub_title'); ?></h6> 
							<?php the_field('booking_description'); ?>

							<a href="tel:<?php the_field('company_telephone_number','option')?>"><span class="fa fa-phone"></span><?php the_field('company_telephone_number','option')?></a>
							<a href="mailto:<?php the_field('company_email','option')?>"><span class="fa fa-envelope"></span><?php the_field('company_email','option')?></a> 
						</div>
						
						<div id="contact-form">
							<h5><?php the_field('contact_form_title'); ?></h5>
							<?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]');?>
						</div>
					</div>
				</div><!--book consultation end-->
			</div>

<?php get_footer(); ?>	