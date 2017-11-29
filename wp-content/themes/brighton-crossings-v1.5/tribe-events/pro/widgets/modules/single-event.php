<?php
/**
 * Single Event Template for Widgets
 *
 * This template is used to render single events for both the calendar and advanced
 * list widgets, facilitating a common appearance for each as standard.
 *
 * You can override this template in your own theme by creating a file at
 * [your-theme]/tribe-events/pro/widgets/modules/single-event.php
 *
 * @version 4.2
 *
 * @package TribeEventsCalendarPro
 *
 */

$mini_cal_event_atts = tribe_events_get_widget_event_atts();

$postDate = tribe_events_get_widget_event_post_date();

$organizer_ids = tribe_get_organizer_ids();

$multiple_organizers = count( $organizer_ids ) > 1;

$_eventImage = '';
if(tribe_event_featured_image($post->ID, 'full')): $_eventImage = 'true'; endif;

$colors = array('darkgray','red','blue','yellow'); 
$color = $colors[array_rand($colors)];

?>

<?php //var_dump(strtolower('CPW.STATE.CO.US/PLACESTOGO/PARKS/BARRLAKE')); ?>

<div class="single-event <?php if($_eventImage == 'true'): echo 'col-md-6 col-sm-12'; else: echo 'col-md-4 col-sm-6'; endif; ?>">
	<?php if($_eventImage == 'true'): ?>
		<div class="photo-event tribe-mini-calendar-event event-<?php esc_attr_e( $mini_cal_event_atts['current_post'] ); ?> <?php esc_attr_e( $mini_cal_event_atts['class'] ); ?>" style="background: transparent url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>) no-repeat center 50%; background-size: cover;">
			<div class="list-info event-info col-md-8 col-md-offset-1 col-sm-9 col-sm-offset-0">
				<h2 class="event-title"><?php the_title(); ?></h2>
				<p class="event-location">
					<?php 
					if($website != ''): 
						echo tribe_get_venue_link();
					else:
						echo tribe_get_venue(); 
					endif;
					?>
				</p>
				<div class="event-description"><?php the_content() ?></div>
				<div class="event-organizer">
					<?php if ( isset( $organizer ) && $organizer && ! empty( $organizer_ids ) ): ?>
						<span class="organizer">
							<?php echo tribe_get_organizer($organizer_id) ?>
							<?php var_dump(tribe_get_organizer_website($organizer)) ?>
						</span>
					<?php endif ?>
				</div>
			</div>
			
			<?php var_dump(tribe_get_organizer_website($organizer)) ?>
			
			<div class="list-date event-date col-md-3 col-sm-3">
				<span class="event-month"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_daynumber', date_i18n( 'M', $postDate ), $postDate, $mini_cal_event_atts['class'] ); ?></span> 
				<span class="event-day"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_daynumber', date_i18n( 'd', $postDate ), $postDate, $mini_cal_event_atts['class'] ); ?></span>
			</div>	
		</div>
	<?php else: ?>
		<div class="event-small tribe-mini-calendar-event event-<?php esc_attr_e( $mini_cal_event_atts['current_post'] ); ?> <?php esc_attr_e( $mini_cal_event_atts['class'] ); ?> <?php echo $color . '-bg' ?>">
			<div class="list-info event-info col-md-9 col-sm-9">
				<h2 class="event-title"><?php the_title(); ?></h2>
				<p class="event-location">
					<?php 
					if($website != ''): 
						echo tribe_get_venue_link();
					else:
						echo tribe_get_venue(); 
					endif;
					?>
				</p>
				<div class="event-description"><?php the_content() ?></div>
				<div class="event-organizer">
					<?php if ( isset( $organizer ) && $organizer && ! empty( $organizer_ids ) ): ?>
						<span class="organizer">
							<?php echo tribe_get_organizer($organizer_id) ?>
							<?php var_dump(tribe_get_organizer_website($organizer)) ?>
						</span>
					<?php endif ?>
				</div>
			</div>
			
			<div class="list-date event-date col-md-3 col-sm-3">
				<span class="event-month"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_daynumber', date_i18n( 'M', $postDate ), $postDate, $mini_cal_event_atts['class'] ); ?></span> 
				<span class="event-day"><?php echo apply_filters( 'tribe-mini_helper_tribe_events_ajax_list_daynumber', date_i18n( 'd', $postDate ), $postDate, $mini_cal_event_atts['class'] ); ?></span>
			</div>
		</div>
	<?php endif; ?>
</div>