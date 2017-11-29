<?php
	$_events = new WP_Query();
	$_events->query('post_type=home_events&post_status=publish&posts_per_page=1&order=DESC&orderby=date');
?>	

		<div class="row">	
			<section class="event-callout">
				<div class="event-container">
				<?php if($_events->have_posts()): while($_events->have_posts()): $_events->the_post() ?>
				
					<?php the_title() ?>
					<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive gogrow-image')) ?>
					<div class="event-caption col-md-12">
						<h2 class="event-title"><?php //the_title() ?></h2>
						<?php //the_content() ?>
						
						<?php 
							$_eventLink = get_field('event_link');
							if($_eventLink):
								$_event = $_eventLink;
								setup_postdata($_event);
							endif;
						?>

					</div>
				</div>
				<?php endwhile; endif; ?>
			</section>
		</div>
		
<?php wp_reset_query() ?>