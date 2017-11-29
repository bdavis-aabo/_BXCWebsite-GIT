		<div class="row">
			<div class="contact-form" id="signup">
				<?php if(is_page('times')): ?>
					<div class="contact-intro">
						<h3 class="yellow-text">Get Your Copy</h3>
						<p>Complete this simple sign-up form to view the latest issue of <strong><em>Crossings Times</em></strong>. We may send you further emails about Brighton Crossings, which you can cancel at any time. We promise not to bug you too often.</p>
					</div>	
					<?php echo do_shortcode('[contact-form-7 id="251" title="Subscribe Form"]') ?>
				<?php else: ?>
					<div class="contact-intro" id="form-link">
						<h3 class="yellow-text">Stay Informed</h3>
						<p>Don't miss all of the fun and exciting things happening at Brighton Crossings. Sign up to stay informed and to receive email updates about the next issue of <strong><em>Crossings Times</em></strong>, and more.<br />These are email updates you can cancel at any time. We promise not to bug you too often</p>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="323" title="Subscribe Form2"]') ?>
				<?php endif; ?>

				
				
			</div>
		</div>