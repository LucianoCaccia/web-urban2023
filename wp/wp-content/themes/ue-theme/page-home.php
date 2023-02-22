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
		<!-- Projectos Loop -->
		<?php $args = array(
    		'post_type' => 'proyecto'
    		// 'posts_per_page' => 3
			);
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

    	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        	<h2><?php the_title(); ?></h2>
    	<?php endwhile; ?>

    	<?php wp_reset_postdata(); ?>

		<?php endif; ?>
		<!-- End loop -->





		<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 1</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 2</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 3</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 4</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 5</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 6</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 7</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 8</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card">
						<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
						<div class="card-body">
							<h5 class="card-title">Card title 9</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
								card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
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
	</section>

<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
