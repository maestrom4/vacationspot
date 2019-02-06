<?php
/**
 * Footer file for this test theme.
 *
 * @package wpthemes1
 * @version 1.0
 * @author Danilo B. Matias Jr.
 * @link danilomatias.bid
 * @since 2018
 */

?>
<?php /** Footer Widget Area */ ?>
		</div> <!-- wrapper -->
		<footer>
			<div class="container-fluid footer-area py-3">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-lg-6 float-left">
							Copyright © 2018 maestrom4 All Rights Reserved
						</div>
						<div class="col-xs-12 col-lg-6 text-right">
							<div class="linkedin"></div>
							<div class="twitter"></div>
							<div class="facebook"></div>
							<div class="google-plus"></div>
						</div>
					</div><!-- row -->
				</div><!-- container -->
				<img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/footer_colored_lines.jpg' ); ?>" alt="">
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
