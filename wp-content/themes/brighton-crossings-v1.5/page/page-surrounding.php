<?php
	$_enjoyPage = new WP_Query();
	$_enjoyPage->query('post_type=page&post_status=publish&pagename=community/go-enjoy&posts_per_page=1&order=DESC&orderby=date');
?>

		<?php if($_enjoyPage->have_posts()): while($_enjoyPage->have_posts()): $_enjoyPage->the_post() ?>
		<div class="row">	
			<section class="subpage-content">
				<div class="col-md-12">
					<h2 class="secondary-headline"><?php echo get_field('hero_title') ?></h2>
					<?php the_content() ?>
				</div>
			</section>
		</div>

		<div class="row">
			<section class="enjoy-callout">
				<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
			</section>
		</div>
		<?php endwhile; endif; ?>

<?php wp_reset_query() ?>