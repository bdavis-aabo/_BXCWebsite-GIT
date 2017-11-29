<?php /* Template Name: Page - Builder */ ?>

<?php get_header() ?>

		<?php if(have_posts()): while(have_posts()): the_post() ?>
		<div class="row">
			<?php $_color = str_replace('-bg', '', get_field('page_color')) ?>
			<section class="<?php echo get_field('page_angle') . ' ' . get_field('page_color') ?> subpage-section <?php if(is_page('homes')): echo 'homes-section'; else: echo 'builder-section'; endif; ?>">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $_color ?>-logo.png" class="img-responsive logomark" alt="" />
				<div class="col-md-12">
					<div class="builder-container">
						<div class="col-md-7 homes-left">
							<?php the_content() ?>
						</div>
						<div class="col-md-5 homes-right">
							<?php if(get_field('page_subimage') != ''): ?>
								<?php 
									$_builderLogo 	= 	get_field('page_subimage');
									$_size 			= 	'large';
									$_thumb			=	$_builderLogo['sizes'][$_size];
								?>
								<img src="<?php echo $_thumb ?>" alt="<?php the_title() ?>" class="img-responsive aligncenter" />
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<div class="row">	
			<section class="homes-content">
				<div class="col-md-5">
					<div class="homebuilder-left <?php echo $post->post_name ?>-details">
						<h3>details</h3>
						<?php echo get_field('homebuilder_details') ?>
						
						<?php 
							$_builder = new WP_Query(); 
							$_builder->query('post_type=home_builders&pagename='.$post->post_name.'&post_status=publish&order=ASC&orderby=date');
							//var_dump($_builder);
						
							while($_builder->have_posts()): $_builder->the_post() 
						?>
						<div class="homebuilder-location">
							The <?php the_title() ?> models are located at:
							<?php echo get_field('home_address') ?>
							
							Sales office is open daily:
							<?php echo '<p>'.get_field('home_hours').'</p>' ?>
							<strong class="builder-phone"><?php echo get_field('home_phone') ?></strong>
						</div>
						<?php endwhile; wp_reset_query() ?>

						<a href="<?php echo get_field('homebuilder_link') ?>" title="<?php the_title(); echo 'at '; bloginfo('name'); ?>" class="btn gray-btn" target="_blank" onclick="ga('send','event','Home Builder','Click','<?php the_title() ?>')">
							visit <?php the_title() ?>
						</a>
					</div>
				</div>
				<div class="col-md-7">
					<div class="homebuilder-gallery">
						<?php if(get_field('homebuilder_images') != ''): $_images = get_field('homebuilder_images'); ?>
							<?php  $_i = 1; foreach($_images as $_image): ?>
								<?php if($_i == 1): ?>
									<div class="col-md-7">
										<img src="<?php echo $_image['url'] ?>" alt="<?php echo $_image['title'] ?>" class="aligncenter img-responsive" />
										<p class="image-caption"><?php echo $_image['title'] ?></p>
										
										<p class="builder-notice">*Visit <?php the_title() ?> for more floor plans available at Brighton Crossings</p>
									</div>
								<?php else: ?>
									<div class="col-md-5">
										<img src="<?php echo $_image['url'] ?>" alt="<?php echo $_image['title'] ?>" class="aligncenter img-responsive" />
										<p class="image-caption"><?php echo $_image['title'] ?></p>
									</div>
								<?php endif; ?>
							<?php $_i++; endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				
				
			</section>
		</div>
		<?php endwhile; endif; ?>
		
		<div class="row">
			<div class="contact-form" id="contact">
				<div class="contact-intro">
					<h3 class="yellow-text"><i class="fa fa-envelope-o"></i> New Home Information</h3>
					<p>Take a moment to fill out the form below and select the homebuilder(s) that interest you the most. We will pass along your interest to the homebuilder(s) of your choice, and also add you to our eNewsletter list so you can enjoy all of the great things happening at Brighton Crossings.</p>
				</div>
				
				<?php echo do_shortcode('[contact-form-7 id="125" title="Builder Form"]') ?>
			</div>
		</div>

<?php get_footer() ?>