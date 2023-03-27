<?php
/**
 * The Template for displaying Proyectos.
 */
/**
 * Template Name: Proyectos
 * Description: Page template with no sidebar.
 *
 */

get_header();


?>

<!-- Add main tag to each one template page -->
<main id="main" class="container-fluid videofull"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
	<section id="slider-video" class="fluid">
		<?php $args = array(
			'post_type' => 'page',
			'pagename' => 'proyectos'
			);
		$the_query = new WP_Query( $args ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
    	<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
		<?php $pepe = get_field('video_bg',$id_query->post->ID,[false]); ?>
			<?php if ($pepe) : ?>
				<video loop="true" autoplay="autoplay" muted src="<?php echo $pepe;?>" type="video/mp4" class="hover-to-play w-100"></video>
			<?php else : ?>
				<img class="img-filter" src="<?php echo the_post_thumbnail_url('large')?>">
			<?php endif;  ?>
		<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
		<?php endif; ?>
        <div class="container">
            <?php
            // Breadcrumbs
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
            ?>

            <div class="content-over position-absolute animated appear delay2 duration4">
                <h1 class="display-2">Elegí tu mejor opción</h1>
                <h1 class="display-2"> para invertir</h1>
            </div>
        </div>   
	</section>

<!-- End Main -->


<section id="proyectos-slider">
	<div class="container">
        <div class="mt-4 mb-4">
            <h1 class="entry-title">ARGENTINA</h1>
            <h2>BUENOS AIRES</h2>
            <hr>
        </div>
        <div id="carouselArgControls" class="carousel" data-bs-ride="carousel">
			<div class="carousel-inner">
				<!-- Projectos Loop Arg -->
				<?php $args = array(
						'post_type' => 'proyecto',
						'meta_key' => 'pais',
						'meta_value' => 'arg'
				);
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php $post_n_arg = $post_n_arg + 1?>
				<?php ($post_n_arg == 1) ? $post_class = "active" : $post_class = "" ?>	
					<div id="id-carousel-item-arg" class="carousel-item <?php echo $post_class ?>">
					<div class="card">
						<div class="img-wrapper" style="filter: brightness(65%);">
							<?php if (get_field('carousel_img')) : ?>
								<img src="<?php the_field('carousel_img')?>"  alt="...">
							<?php else : ?>
								<img src="https://picsum.photos/311/461"  alt="...">
							<?php endif; ?>						
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-12 title mb-4">
									<img src="<?php the_field('logo_pr');?>" style="width:12rem;" class="logo-pr" alt="Logo del proyecto <?php the_title(); ?>"> 
								</div>
								<div class="col-12 link">
								<a href="<?php the_permalink();?>" class="btn btn-light btn-card ps-4 pe-4">Descubrir</a>
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
        <div class="mt-4 mb-4">
            <h1 class="entry-title">URUGUAY</h1>
            <h2>MONTEVIDEO</h2>
            <hr>
        </div>        
        <div id="carouselUruControls" class="carousel" data-bs-ride="carousel">
			<div class="carousel-inner">
                <!-- Projectos Loop Uru -->
                <?php $args = array(
                    'post_type' => 'proyecto',
                    'meta_key' => 'pais',
                    'meta_value' => 'uru'
                );
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $post_n_uru = $post_n_uru + 1?>
                <?php ($post_n_uru == 1) ? $post_class = "active" : $post_class = "" ?>						
                <div id="id-carousel-item-uru" class="carousel-item <?php echo $post_class ?>">
				<div class="card">
						<div class="img-wrapper" style="filter: brightness(65%);">
							<?php if (get_field('carousel_img')) : ?>
								<img src="<?php the_field('carousel_img')?>"  alt="...">
							<?php else : ?>
								<img src="https://picsum.photos/311/461"  alt="...">
							<?php endif; ?>	
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-12 title mb-4">
									<img src="<?php the_field('logo_pr');?>" style="width:12rem;" class="logo-pr" alt="Logo del proyecto <?php the_title(); ?>"> 
								</div>
								<div class="col-12 link">
								<a href="<?php the_permalink();?>" class="btn btn-light btn-card ps-4 pe-4">Descubrir</a>
								</div>									
							</div>
						</div>
					</div>
				</div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselUruControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselUruControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>	<!-- end of slider -->
    </div>
</section>

<?php include get_template_directory() . '/inc/section-contacto.html'; ?>

<?php get_footer(); ?>
