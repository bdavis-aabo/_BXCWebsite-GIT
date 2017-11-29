<?php /* Template Name: Page - Community */ ?>

<?php get_header() ?>

		<div class="row">
			<?php if(have_posts()): while(have_posts()): the_post() ?>
			
			<?php $_color = str_replace('-bg', '', get_field('page_color')) ?>
			
			<section class="<?php echo get_field('page_angle') . ' ' . get_field('page_color') ?> subpage-section">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $_color ?>-logo.png" class="img-responsive logomark" alt="" />
				<div class="col-md-8">
					<div class="subpage-container">
						<?php the_content() ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="subpage-container welcome-headline">
						<?php echo get_field('page_subcontent') ?>
					</div>
				</div>
			</section>
			<?php $_subImage = get_field('page_subimage'); ?>
			<?php if($_subImage): ?><img src="<?php echo $_subImage['url'] ?>" class="img-responsive aligncenter subpage-bottom-image" alt="<?php echo $_subImage['title'] ?>" /><?php endif; ?>
			
			<?php endwhile; endif; ?>
		</div>
		
		<?php get_template_part('page/page-surrounding') ?>
		
		<?php get_template_part('contact/contact-form') ?>

<?php get_footer() ?>