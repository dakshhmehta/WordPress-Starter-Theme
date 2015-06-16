<?php global $themeOptions; ?>
</div>
	<div class="container">
		<footer>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					Call SU   <span>UK</span> 028 9051 1266    <span>RoI</span> 01 893 4922 <br/>
					Email      <a href="#">info@hellosu.com</a>
				</div>
				<div class="col-md-6 col-sm-12 footer-links">
					<p>
						<a href="#">Site Map</a>     
						<a href="#">Terms and Conditions</a>
						<a href="#">Media Info</a>     
						<a href="#">Contact Us</a>
					</p>
					<p>
						<?php echo $themeOptions['footer-text']; ?>
					</p>	
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>
</body>
</html>