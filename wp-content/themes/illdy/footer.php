<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

if ( current_user_can( 'edit_theme_options' ) ) {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright', __( '&copy; Copyright 2016. All Rights Reserved.', 'illdy' ) );
} else {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright' );
}
?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<?php
			$the_widget_args = array(
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h5>',
				'after_title'   => '</h5></div>',
			);
			?>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-1' ) ):
					dynamic_sidebar( 'footer-sidebar-1' );
				elseif ( current_user_can( 'edit_theme_options' ) ):
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Products', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Our work', 'illdy' ) . '">' . __( 'Our work', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Club', 'illdy' ) . '">' . __( 'Club', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'News', 'illdy' ) . '">' . __( 'News', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Announcement', 'illdy' ) . '">' . __( 'Announcement', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
		</div><!--/.row-->
	</div><!--/.container-->
	<div class="bottom-footer">
		<div class="container">
			<p class="copyright">
				<span class="bottom-copyright" data-customizer="copyright-credit"><?php echo illdy_sanitize_html( $footer_copyright ); ?></span>
			</p>
		</div>
	</div>
</footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>