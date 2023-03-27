<?php
/**
 * Template Name: Page (No Sidebar)
 * Description: Page template with no sidebar.
 *
 */

get_header();

the_post();
?>

<!-- Add main tag to each one template page -->
<main id="main" class="container-fluid videofull"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
	<?php
		// If Single or Archive (Category, Tag, Author or a Date based page).
		if ( is_single() || is_archive() ) :
	?>
		<div class="row">
			<div class="col-md-8 col-sm-12">
	<?php
		endif;
	?>

	<section id="slider-video" class="fluid">	

			<?php if (has_post_thumbnail( $post->ID ) ) : ?>

				<img src="<?php echo the_post_thumbnail_url('large')?>" style="width: 100%;">

			<?php else : ?>
				<div class="video-overflow">
				<img src="/wp-content/themes/ue-theme/img/default-header.jpeg" style="width:100%;"alt="">
				</div>
			
			<?php endif;  ?>

		<div class="container">
			<div class="content-over position-absolute animated appear delay2 duration4">
				<!-- <h1 class="display-2">RENTABILIDAD</h1>
				<h1 class="display-2">EXPERIENCIA</h1>
				<h1 class="display-2">EXELENCIA</h1>
				<h2 class="display-3">Viví mejor, viví como querés</h2> -->
			</div>
		</div>

	</section>
<!-- End Main -->

<div id="post-<?php the_ID(); ?>" <?php post_class( 'content container' ); ?>>
	<section id="breadcrumbs">
		<div class="container">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );} ?>
		</div>
	</section>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'ue-theme' ) . '">',
				'after'    => '</nav>',
				'pagelink' => esc_html__( 'Page %', 'ue-theme' ),
			)
		);
		edit_post_link(
			esc_attr__( 'Edit', 'ue-theme' ),
			'<span class="edit-link">',
			'</span>'
		);
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

// Section Contacto
include get_template_directory() . '/inc/section-contacto.html';
	

get_footer();
