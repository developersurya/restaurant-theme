<?php
/**
 * Template Name: Menu Template
 *
 * @package finedine
 */
get_header();
?>
	<div class="interior-hero">
		<?php
		if ( get_the_post_thumbnail_url() ) {
			?>
			<img src='<?php echo esc_url( get_the_post_thumbnail_url() ); ?>' alt='<?php esc_attr_e( 'header img', 'finedine' ); ?>'>
			<div class="title-wrap">
				<h1 class="page-title">
					<?php the_title(); ?>
				</h1>
			</div>
			<?php
		} else {
			if ( get_custom_header_markup() ) {
				the_custom_header_markup();
			}
			?>
			<div class="title-wrap">
				<h1 class="page-title">
					<?php the_title(); ?>
				</h1>
			</div>
			<?php
		}
		?>
	</div>
	<div id="content" class="site-content">
		<div class="container clear">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<div class="row">
						<div class="offset-lg-2 col-lg-8">
							sdfg sdfg dsfg sdfgsdfg sdfg
						</div>
					</div>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .container -->
	</div>
<?php
get_footer();
