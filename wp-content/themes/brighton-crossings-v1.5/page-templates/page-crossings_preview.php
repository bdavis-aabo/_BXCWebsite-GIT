<?php /* Template Name: Page - Crossings Preview */ ?>

<?php get_header() ?>

	<?php if(have_posts()): while(have_posts()): the_post() ?>
		<div class="row">
			<?php $_color = str_replace('-bg', '', get_field('page_color')) ?>
			<section class="<?php echo get_field('page_angle') . ' ' . get_field('page_color') ?> subpage-section events-section">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $_color ?>-logo.png" class="img-responsive logomark" alt="" />
				<div class="col-md-12">
					<div class="subpage-container">
						<div class="col-md-7">
							<div class="crossings-contentbox-left">
								<?php the_content() ?>
							</div>
						</div>
						<div class="col-md-5">
							
							<?php $_pageImage = get_field('page_subimage'); ?>
							<?php if($_pageImage): ?>
								<img src="<?php echo $_pageImage['url'] ?>" alt="<?php echo $_pageImage['alt'] ?>" class="img-responsive aligncenter" />
							<?php endif; ?>

						</div>
					</div>
				</div>
			</section>
		</div>
	
	
		<div class="row">
			<section class="ebook-preview" id="preview">
				<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">
					<?php $_times = get_field('times_shortcode'); echo do_shortcode($_times); ?>
				</div>
			</section>
		</div>
		
		<div class="row">
			<section class="go-social">
				<div class="col-md-12">
					<?php echo get_field('page_subcontent') ?>
				</div>
			</section>
		</div>
	<?php endwhile; endif; ?>
	<?php get_template_part('contact/subscribe-form') ?>

<?php get_footer() ?>