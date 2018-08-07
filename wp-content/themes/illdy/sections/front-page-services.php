<?php
/**
 *	The template for displaying services section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$services_general_title = get_theme_mod( 'illdy_services_general_title', __( 'Services', 'illdy' ) );
	$services_general_entry = get_theme_mod( 'illdy_services_general_entry', __( 'In order to help you grow your business, our carefully selected experts can advise you in in the following areas:', 'illdy' ) );
}else{
	$services_general_title = get_theme_mod( 'illdy_services_general_title' );
	$services_general_entry = get_theme_mod( 'illdy_services_general_entry' );
}

?>

<?php if ( $services_general_title != '' || $services_general_entry != '' || is_active_sidebar( 'front-page-services-sidebar' ) ) { ?>

<section id="services" class="front-page-section">
	<?php if( $services_general_title || $services_general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $services_general_title ): ?>
						<div class="col-sm-12">
							<h3><?php echo do_shortcode(wp_kses_post( $services_general_title )); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if( $services_general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<div class="section-description"><?php echo do_shortcode(wp_kses_post( $services_general_entry )); ?></div>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row inline-columns">
				<?php
				if( is_active_sidebar( 'front-page-services-sidebar' ) ):
					dynamic_sidebar( 'front-page-services-sidebar' );
				elseif( current_user_can( 'edit_theme_options' ) & defined("ILLDY_COMPANION") ):
					$the_widget_args = array(
						'before_widget'	=> '<div class="col-sm-4 widget_illdy_service">',
						'after_widget'	=> '</div>',
						'before_title'	=> '',
						'after_title'	=> ''
					);

					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Web Design', 'illdy' ) .'&icon=fa-pencil&entry='. __( 'We plan with your brand in the center of everything we do to capture  big ideas through intelligent website design..', 'illdy' ) .'&color=#eba31d', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Web Development', 'illdy' ) .'&icon=fa-code&entry='. __( 'Putting together forms and function through expert website development that commands attention and conversions.', 'illdy' ) .'&color=#eba31d', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Android and Ios Development', 'illdy' ) .'&icon=fa-mobile&entry='. __( 'Having the expertise in developing application for mobile or tablet devices, our team combines skills and passion to deliver the most immersive experience of your idea be it for personal or business solution mobile apps.', 'illdy' ) .'&color=#eba31d', $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#services.front-page-section-->

<?php } ?>