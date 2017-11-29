<?php $colors = array('green','yellow','blue'); $color = $colors[array_rand($colors)]; ?>
	
			<div class="row">
				<footer class="footer">
					<div class="container">
						<div class="row">
							<div class="parallelogram slant-up <?php echo $color ?>-bg">
								<a href="#" class="footer-logo"><?php bloginfo('name') ?></a>
							</div>
							<div class="darkgray-bg">
								<div class="copyright">
									<p>A masterplanned community located in Brighton, CO near Barr Lake State Park. Take I-76 to Bromley Lane. Exit west and then turn right onto the frontage road to Bridge Street and follow the signs to the <a href="http://www.brookfieldresidentialco.com/communities/brighton-crossings/models" class="<?php echo $color . '-text'; ?>" target="_blank">Brookfield Residential</a>, <a href="http://www.drhorton.com/Colorado/Northeast-Denver/Brighton/brighton-crossing.aspx" class="<?php echo $color . '-text'; ?>" target="_blank">DR Horton Homes</a>, <a href="http://www.dreamfindershomes.com/brighton-crossing" class="<?php echo $color . '-text' ?>" target="_blank">Dream Finders Homes</a> and <a href="https://www.richmondamerican.com/colorado/denver-metro-new-homes/brighton/brighton-crossings/" class="<?php echo $color . '-text' ?>" target="_blank">Richmond American</a> locations. <a href="http://maps.google.com/maps?q=45%20S.%2045th%20Avenue%2C%20Brighton%2C%20CO%2080601%2C%20United%20States" class="<?php echo $color . '-text'; ?>" target="_blank">Directions to Brighton Crossings</a></p>
									<p>Copyright ©<?php echo date('Y') ?> Brookfield Residential. <a href="http://www.brookfieldresidentialco.com/privacy-policy" class="<?php echo $color . '-text'; ?>" target="_blank">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.brookfieldresidentialco.com/terms-use" class="<?php echo $color . '-text'; ?>" target="_blank">Terms of Use</a></p>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		
		</div><!-- /container -->
		
		
		<a class="scrollToTop"><i class="fa fa-chevron-up"></i></a>
		
		<?php include('assets/_inc/wp_bootstrap_analytics.php') ?>

		
		<?php wp_footer() ?>
   	</body>
</html>
