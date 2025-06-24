<?php
/**
 * Template Name: Page: Prensa
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

				<img src="<?php echo the_post_thumbnail_url('large')?>" style="width: 100%; filter: brightness(65%);">

			<?php else : ?>
				<div class="video-overflow">
				<img src="/wp-content/themes/ue-theme/img/default-header.jpeg" style="width:100%;"alt="">
				</div>
			
			<?php endif;  ?>

		<div class="container">
            <div class="content-over position-absolute animated appear delay2 duration4">
                <h1 class="display-2"><b>PRENSA</b></h1>
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

    <section id="proyectos-slider">
	<div class="container">
        <div class="mt-4 mb-4 pt-5">
            <h2>Novedades Urban Estate</h2>
        </div>
        <div id="carouselArgControls" class="carousel" data-bs-ride="carousel">
			<div class="carousel-inner">
				<!-- Post Loop -->
				<?php $args = array(
						'post_type' => 'post'
				);
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php $post_n_arg = $post_n_arg + 1?>
				<?php ($post_n_arg == 1) ? $post_class = "active" : $post_class = "" ?>	
					<div id="id-carousel-item-arg" class="carousel-item <?php echo $post_class ?>">
					<div class="card">
						<div class="img-wrapper" style="filter: brightness(65%);">
							<?php if (get_field('carousel_img_post')) : ?>
								<img src="<?php the_field('carousel_img_post')?>"  alt="...">
							<?php else : ?>
								<img src="/wp-content/themes/ue-theme/img/default-card.jpg"  style="filter: blur(3px);" alt="...">
							<?php endif; ?>						
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-12 title mb-4">
                                    <h2 class="text-white"><?php the_title(); ?></h3>
                                    <?php if (get_field('logo_medio')) : ?>
									    <img src="<?php the_field('logo_medio');?>" style="height:6rem;" class="logo-pr" alt="<?php the_title(); ?>"> 
                                    <?php endif; ?>	
								</div>
								<div class="col-12 link"> 
                                    <!-- Condicional para mostrar el boton con link -->
                                    <?php if (get_field('link_post')) : ?>
								        <a target="_blank" href="<?php the_field('link_post');?>" class="btn btn-light btn-card ps-4 pe-4">Ver la nota</a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink() ;?>" class="btn btn-light btn-card ps-4 pe-4" style="margin-top:6rem;">Leer</a>
                                    <?php endif; ?>	
                                </div>									
							</div>
						</div>
					</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselArgControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselArgControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
		</div> <!-- enf of slider -->
        
    </div>
    </section>




</div>
<div class="fluid">

<!-- Banner Próxima Inversión -->
<?php include get_template_directory() . '/inc/banner-inv-sala.html'; ?>

</div>
<!-- /#post-<?php the_ID(); ?> -->
<?php
// Section Contacto
include get_template_directory() . '/inc/section-contacto.html';
	

get_footer();
