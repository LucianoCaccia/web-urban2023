<?php
/**
 * Template Name: Home Page
 * Description: Page template with no sidebar.
 *
 */

get_header();

the_post();
?>

<!-- Add main tag to each one template page -->
<main id="main" class="container-fluid"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
	<?php
		// If Single or Archive (Category, Tag, Author or a Date based page).
		if ( is_single() || is_archive() ) :
	?>
		<div class="row">
			<div class="col-md-8 col-sm-12">
	<?php
		endif;
	?>
	<section id="slider-video" class="container-fluid">
		<video loop="true" autoplay="autoplay" muted src="/wp-content/themes/ue-theme/assets/forest.mp4" type="video/mp4" class="hover-to-play w-100"></video>
	</section>

	
<!-- End Main -->

<div id="post-<?php the_ID(); ?>" <?php post_class( 'content container' ); ?>>
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

<section id="proyectos-slider">
		<?php $args = array(
    		'post_type' => 'proyecto'
    		// 'posts_per_page' => 3
			);
		$the_query = new WP_Query( $args ); ?>

	<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
		<div class="carousel-inner">
		<!-- Projectos Loop -->
		<?php if ( $the_query->have_posts() ) : ?>
    	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<!-- <a href="<?php the_permalink();?>">	<h2><?php the_title(); ?></h2> </a> -->
			<!-- <p><?php the_content(); ?></p> -->
			<!-- <?php $id = get_the_ID() ?> -->
			<!-- <span class="badge text-bg-success"><?php the_field('amenities'); ?> </span> -->
			<!-- <span class="badge text-bg-warning"><?php the_field('avance'); ?></span> -->
			<?php $post_n = $post_n + 1?>
			<?php ($post_n == 1) ? $post_class = "active" : $post_class = "" ?>
			<div class="carousel-item <?php echo $post_class ?>">
				<div class="card">
					<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5><span><?php echo $post_n?></span>
						<p class="card-text"><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
						<a href="<?php the_permalink();?>" class="btn btn-primary">Go <?php the_title(); ?></a>
					</div>
				</div>
			</div>
    	<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!-- End loop -->

</section>

<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
