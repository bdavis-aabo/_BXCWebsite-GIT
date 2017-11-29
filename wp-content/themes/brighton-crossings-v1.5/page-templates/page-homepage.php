<?php /* Template Name: Page - Landing */ ?>

<?php get_header() ?>

		<div class="row">
			<section class="slant-up welcome-section">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/lightblue-logo.png" class="img-responsive alignright logomark" alt="" />
				<?php if(have_posts()): while(have_posts()): the_post() ?>
				
				<div class="col-md-8 col-sm-8">
					<div class="welcome-container">
						<h2><?php the_title() ?></h2>
						<?php the_content() ?>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="welcome-container welcome-headline">
						<?php echo get_field('page_subcontent') ?>
					</div>
				</div>
				
				<?php endwhile; endif; ?>
			</section>
		</div>
		
		<?php get_template_part('home/home-event') ?>
		
		<?php get_template_part('home/home-social') ?>
		
		<?php get_template_part('contact/contact-form') ?>

<?php get_footer() ?>