<?php /* Template Name: Page - Crossings */ ?>

<?php get_header() ?>

	<?php if(have_posts()): while(have_posts()): the_post() ?>
		<div class="row">
			<?php $_color = str_replace('-bg', '', get_field('page_color')) ?>
			<section class="<?php echo get_field('page_angle') . ' ' . get_field('page_color') ?> subpage-section events-section">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $_color ?>-logo.png" class="img-responsive logomark" alt="" />
				<div class="col-md-12">
					<div class="subpage-container">
						<div class="col-md-6">
							<div class="subpage-container welcome-headline">
								<?php $_pageImage = get_field('page_subimage'); ?>
								<?php if($_pageImage): ?>
									<img src="<?php echo $_pageImage['url'] ?>" alt="<?php echo $_pageImage['alt'] ?>" class="img-responsive aligncenter" />
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="crossings-contentbox">
								<?php the_content() ?>
								
								<div class="crossings-link">
									<a href="#signup" class="aligncenter" title="Get the Crossings Times">
										<img src="<?php bloginfo('template_directory') ?>/assets/images/crossings-copybtn.png" alt="Get the Crossings Times" />
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	<?php endwhile; endif; ?>
	
	<?php get_template_part('contact/subscribe-form') ?>

<?php get_footer() ?>