<?php /* Template Name: Page - Community */ ?>

<?php
	global $post;
	$post_class = get_post($post->ID);
	
	$_childPages = new WP_Query();
	$_args = array(
		'post_parent'	=>	$post->ID,
		'post_type'		=>	'page',
		'post_status'	=>	'publish',
		'order'			=>	'ASC',
		'orderby'		=>	'id',
		'pagename'		=>	'community/community-accordian'
	);
	$_childPages->query($_args);
?>

<?php get_header() ?>
	<?php while(have_posts()): the_post(); ?>
	<div class="row">
		<section class="community-section">
			<div class="col-md-12">
				<div class="community-content"><?php the_content() ?></div>
			</div>
			<img src="<?php bloginfo('template_directory') ?>/assets/images/community-bottomimage.jpg" class="img-responsive" alt="" />
		</section>
	</div>
	
	<div class="row">
		<section class="community-amenities">
			<div class="col-md-12">
				<div class="community-information">
					<?php echo get_field('page_subcontent') ?>
					
					
					<?php if($_childPages->have_posts()): ?>
					<div class="community-panel">
						<?php while($_childPages->have_posts()): $_childPages->the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
					<?php else: ?>no children<?php endif; ?>
				</div>
				<div class="community-mapbtn">
					<a href="<?php bloginfo('template_directory') ?>/assets/maps/bxc_community-map.pdf" class="btn yellow-btn" target="_blank">download community map</a>
				</div>
			</div>
		</section>
	</div>
	<?php endwhile; ?>
	
		<?php get_template_part('page/page-surrounding') ?>
		
		<?php get_template_part('contact/contact-form') ?>

<?php get_footer() ?>