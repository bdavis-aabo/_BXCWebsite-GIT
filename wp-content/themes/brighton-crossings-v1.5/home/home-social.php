<?php
	$_social = new WP_Query();
	$_social->query('post_type=page&post_status=publish&pagename=socialize&posts_per_page=1&order=DESC&orderby=date');
?>	
		<div class="row">
			<section class="social-section">
				<?php if($_social->have_posts()): while($_social->have_posts()): $_social->the_post() ?>
				<div class="col-md-12">
					<div class="social-container">
						<h2><?php the_title() ?></h2>
						<span class="social-hashtags"><a href="#">#itsabouttime</a>&nbsp;&nbsp;<a href="#">#brightoncrossings</a></span>
						<?php the_content() ?>
					</div>
				</div>
				<?php endwhile; endif; ?>
				
<!--
				<div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_directory') ?>/assets/images/socialize-image.jpg" class="img-responsive aligncenter" alt="" /></div>
				<div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_directory') ?>/assets/images/socialize-image.jpg" class="img-responsive aligncenter" alt="" /></div>
				<div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_directory') ?>/assets/images/socialize-image.jpg" class="img-responsive aligncenter" alt="" /></div>
				<div class="col-md-3 col-sm-6 col-xs-6"><img src="<?php bloginfo('template_directory') ?>/assets/images/socialize-image.jpg" class="img-responsive aligncenter" alt="" /></div>
-->
			</section>	
		</div>

<?php wp_reset_query() ?>