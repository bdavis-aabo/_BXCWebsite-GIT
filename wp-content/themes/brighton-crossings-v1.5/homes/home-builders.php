<?php
	$_builders = new WP_Query();
	$_builders->query('post_type=home_builders&post_status=publish&order=ASC&orderby=date');
?>

		<div class="row">
			<section class="homes-builders">
			<?php if($_builders->have_posts()): while($_builders->have_posts()): $_builders->the_post() ?>
				<div class="col-md-6 col-sm-6 col-xs-8 col-xs-offset-2 col-md-offset-0 col-sm-offset-0">
					<div class="home-builder">
						<a href="<?php echo get_field('home_link') ?>" title="<?php the_title() ?>" target="_blank">
							<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
						</a>
						<?php the_content() ?>
						<p class="price"><?php echo get_field('home_price') ?></p>
						
						<?php if(get_field('home_page') != ''): ?>
							<a href="<?php echo get_field('home_page') ?>" class="btn blue-btn" title="<?php the_title() ?>" onclick="_gaq.push(['_trackEvent', 'Button', 'Home Builder', '<?php the_title() ?>',5,true])">Learn More</a>
						<?php else: ?>
							<a href="<?php echo get_field('home_link') ?>" class="btn blue-btn" title="<?php the_title() ?>" onclick="_gaq.push(['_trackEvent', 'Button', 'Home Builder', '<?php the_title() ?>',5,true])" target="_blank">Learn More</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
			</section>
		</div>