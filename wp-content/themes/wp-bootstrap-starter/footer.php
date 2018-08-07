<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="logo-wrap">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("f-logo") ) : ?>
			<?php endif; ?>
		</div>
		<div class="cInfoWrap">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("c-info") ) : ?>
				<ul class="footer-cinfo">
					<li><a href="tel:025178969">(02) 517 8969</a> / <a href="tel:+639459774048">0945 977 4048</a></li>
					<li><a href="mailto:info@manilacodes.com">info@manilacodes.com</a></li>
				</ul>
			<?php endif; ?>
		</div>
		<div class="site-map-wrap">
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary','depth'=>1 ) ); ?>	
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>