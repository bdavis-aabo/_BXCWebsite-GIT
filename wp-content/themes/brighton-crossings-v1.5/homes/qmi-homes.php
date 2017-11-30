<?php
	$_terms = get_terms('builder','orderby=slug&hide_empty=0');
	$_count = count($_terms);
	//var_dump($_count);
?>
						<section class="page-quickmoves">
							<div class="quickmove-table">
							<?php 
								$_builders = array();
								foreach($_terms as $_term): array_push($_builders, $_term->slug); endforeach;
								$_homeBuilders = new WP_Query(array(
									'orderby' => 'title',
									'order'   => 'ASC',
									'post_type' => 'home_builders',
									'posts_per_page' => -1,
								));
							?>
								
								<?php while($_homeBuilders->have_posts()): $_homeBuilders->the_post() ?>
								<?php 
									$_btnColor = '';
								if($post->post_name == 'brookfield-residential'): 
									$_btnColor = 'yellow';
								elseif($post->post_name == 'd-r-horton'):
									$_btnColor = 'blue';
								elseif($post->post_name == 'dream-finders-homes'):
									$_btnColor = 'orange';
								elseif($post->post_name == 'richmond-american-homes'):
									$_btnColor = 'green';
								endif;
								?>
								<?php if(in_array($post->post_name, $_builders)): ?>
								<div class="builder-header <?php echo $post->post_name.'-row' ?>">
									<div class="col-md-4 col-xs-12 builder-blocks">
										<div class="builder-logo">
											<?php echo get_the_post_thumbnail($post->ID,'full',array('class'=>'img-responsive aligncenter')) ?>
										</div>
									</div>
									<div class="col-md-8 col-xs-12 builder-blocks">
										<div class="builder-description">
											<h2><?php the_title() ?></h2>
											<p>
												<?php echo strip_tags(get_field('home_address')) ?><br />
												<?php echo 'Sales office is open daily<br />'. str_replace('<br>', ' | ',get_field('home_hours')) ?><br />
												<strong class="builder-phone <?php echo $_btnColor . '-text' ?>"><?php echo get_field('home_phone') ?></strong>
											</p>
										</div>
									</div>
								</div>

								<div class="builder-homes">
								<?php $_quickhomes = new WP_Query(array(
									'builder' => $post->post_name,
									'orderby' => 'title',
									'order'   => 'ASC',
									'post_type' => 'quickmoves',
									'posts_per_page' => -1,
									'hide_empty' => 1
									));
								?>
									<?php if($_quickhomes->have_posts()): while($_quickhomes->have_posts()): $_quickhomes->the_post(); ?>
									<?php $_homeImage = get_field('qmi_image'); ?>
									<div class="home-detail">
										<div class="col-md-4 col-xs-12">
											<div class="home-image">
												<img src="<?php echo $_homeImage['url'] ?>" class="img-responsive aligncenter" />
											</div>
										</div>
										<div class="col-md-8 col-xs-12">
											<div class="home-description">
												<?php $_terms = wp_get_post_terms($post->ID,'builder'); ?>
												<h2><?php the_title() ?></h2>
												<h3 class="price <?php foreach($_terms as $_term): echo $_btnColor . '-text'; endforeach; ?>">
													<?php if(get_field('qmi_price') != ''): echo '$' . get_field('qmi_price'); else: echo 'Please see Sales Associate for Details'; endif; ?>
												</h3>
												
												<p class="details">
													<?php echo get_field('qmi_square_footage') . ' | ' . get_field('qmi_bedrooms') . ' bedrooms | ' . get_field('qmi_bathrooms') . ' bathrooms | ' .
														get_field('qmi_garage') ?>
												</p>
												<?php the_content() ?>
												
												<a href="<?php echo get_field('qmi_link') ?>" class="btn <?php echo $_btnColor ?>-btn" target="_blank">Learn More</a>
											</div>
										</div>
									</div>
									<?php endwhile; 
									else: ?>	
									<div class="home-detail no-home">
										<div class="col-md-4 col-xs-12">
											<div class="home-image">
												<img src="<?php bloginfo('template_directory') ?>/assets/images/nohomes-available.png" class="img-responsive aligncenter" />
											</div>
										</div>
										<div class="col-md-8 col-xs-12">
											<div class="home-description">
												<h2>There are no quick move-in homes available from this builder.<br/>Please call the sales office for more information</h2>
												<?php foreach($_terms as $_term): ?>
												<h3 class="price  <?php echo $_btnColor . '-text'; ?>">
													<?php echo $post->post_title . ' is actively selling at Brighton Crossings. Visit or call the sales office for more information.' ?>
												</h3>
												<?php endforeach; ?>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<?php endif; //in_array statement ?>
									
								<?php endwhile; wp_reset_query();  ?>
							</div>
						</section>