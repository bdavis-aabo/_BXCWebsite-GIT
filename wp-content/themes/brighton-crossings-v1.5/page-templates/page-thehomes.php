<?php /* Template Name: Page - Homes */ ?>

<?php get_header() ?>

		<?php if(have_posts()): while(have_posts()): the_post() ?>
		<div class="row">
			<?php $_color = str_replace('-bg', '', get_field('page_color')) ?>
			<section class="<?php echo get_field('page_angle') . ' ' . get_field('page_color') ?> subpage-section <?php if(is_page('homes')): echo 'homes-section'; else: echo 'builder-section'; endif; ?>">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $_color ?>-logo.png" class="img-responsive logomark" alt="" />
				<div class="col-md-12">
					<div class="subpage-container">
						<div class="col-md-7 homes-left">
							<?php the_content() ?>
							<?php if(!is_page('homes')): ?>
								<a href="<?php echo get_field('homebuilder_link') ?>" title="<?php the_title(); echo 'at '; bloginfo('name'); ?>" class="btn gray-btn" target="_blank">visit <?php the_title() ?></a>
								<?php endif; ?>
						</div>
						<div class="col-md-5 homes-right">
							<?php if(is_page('homes') || is_page('brookfield-residential')): ?>
								<img src="<?php bloginfo('template_directory') ?>/assets/images/brookfield-logo-white.png" alt="Brookfield Residential" class="img-responsive aligncenter" />
							<?php else: ?>
								<?php 
									$_builderLogo 	= 	get_field('page_subimage');
									$_size 			= 	'large';
									$_thumb			=	$_builderLogo['sizes'][$_size];
									$_homeImages 	= 	get_field('homebuilder_images');
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
				<div class="col-md-7">
					<div class="homebuilder-left">
						<?php echo get_field('homebuilder_left') ?>
						
					</div>
				</div>
				<div class="col-md-5">
					<div class="homebuilder-right">
						<?php echo get_field('homebuilder_right') ?>
					</div>
				</div>
				
				<div class="homebuilder-images">
					<?php 
						if($_homeImages): ?>
						<ul class="homes">
							<?php foreach($_homeImages as $_homeImage): ?>
								<li class="col-md-4 home"><img src="<?php echo $_homeImage['url'] ?>" alt="" class="aligncenter img-responsive" /></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</section>
		</div>
		<?php endwhile; endif; ?>
		
		
		<?php if(is_page('homes')): get_template_part('homes/home-builders'); endif; ?>
		
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