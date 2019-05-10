<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fcptcn
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer allFooter">
		<div class="container">
			<div class="col-md-4 footerBoxes">
				<ul>
					<li><?php echo get_field('footer_street_address', 'option'); ?></li>
					<li><?php echo get_field('footer_state_and_city_address', 'option'); ?></li>
					<li><a href="tel:<?php echo get_field('footer_phone_number', 'option'); ?>"><?php echo get_field('footer_phone_text', 'option'); ?> <?php echo get_field('footer_phone_number', 'option'); ?></a></li>
					<li><?php echo get_field('footer_email_text', 'option'); ?> <?php echo get_field('footer_email_address', 'option'); ?></li>
				</ul>
			</div>
			<div class="col-md-4 footerBoxes">
				<ul>
					<li><?php echo get_field('footer_text_1', 'option'); ?></li>
					<li><?php echo get_field('footer_text_2', 'option'); ?></li>
				</ul>
			</div>
			<div class="col-md-4 footerBoxes">
				<?php get_sidebar() ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
