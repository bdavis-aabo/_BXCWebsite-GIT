<?php /* Template Name: Page - Events */ ?>

<?php get_header() ?>

	<?php if(have_posts()): while(have_posts()): the_post() ?>
		<div class="row">
			<?php $_color = str_replace('-bg', '', get_field('page_color')) ?>
			<section class="<?php echo get_field('page_angle') . ' ' . get_field('page_color') ?> subpage-section events-section">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $_color ?>-logo.png" class="img-responsive logomark" alt="" />
				<div class="col-md-12">
					<div class="subpage-container">
						<div class="col-md-8 homes-left">
							<?php the_content() ?>
						</div>
						<div class="col-md-4">
							<div class="subpage-container welcome-headline">
								<?php //echo get_field('page_subcontent') ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<div class="row">	
			<section class="homes-content">
				<div class="col-md-12">
					<?php echo get_field('page_subcontent') ?>
					
					<?php dynamic_sidebar('events_widget'); ?>	
				</div>
			</section>
		</div>
	<?php endwhile; endif; ?>
	
	<?php get_template_part('contact/contact-form') ?>

<?php get_footer() ?>