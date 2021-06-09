<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>

<div class="footer-border"></div>
	<footer id="colophon" class="site-footer">
			<p class="copyright">ⓒ <?php echo date("Y") ?> Coolmat All Rights Reserved</p>
			<div class="footer-social">
				<img src="<?php bloginfo('template_url'); ?>/assets/facebook-icon.svg" alt="facebook">
				<img src="<?php bloginfo('template_url'); ?>/assets/instagram-icon.svg" alt="instagram">
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
