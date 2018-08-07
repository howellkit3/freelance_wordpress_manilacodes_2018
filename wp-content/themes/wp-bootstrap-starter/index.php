<?php get_header(); ?>

	<!-- your home html -->
	<section class="section1">
		<div class="search-wrap">
			<div class="phone-bg-wrapper">
			<div class="search-form">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("search-field") ) : ?>
			<?php endif; ?>
			</div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("search-bg") ) : ?>
				<img class="img-responsive phone-bg" alt="phone bg" src="<?php echo do_shortcode('[blogurl]')?>/wp-content/uploads/2018/06/iphone_x.png"/>
			<?php endif; ?>
			</div>
		</div>
		<div class="slideshow-wrap">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("main-slideshow") ) : ?>
			<?php endif; ?>
		</div>
	</section>

	<div class="section2">
		<div class="container">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("our-works-section") ) : ?>
			<?php endif; ?>
		</div>
	</div>

	<section class="section3">
		<div class="container">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("lwt-section") ) : ?>
			<?php endif; ?>
		</div>
	</section>


	<!-- your home html -->

<?php get_footer(); ?>
