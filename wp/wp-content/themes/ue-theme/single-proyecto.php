<?php
/**
 * The Template for displaying all single posts.
 */

get_header();
?>

<main id="main" class="container-fluid videofull">

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

<section id="slider-video" class="fluid">		
        <img src="<?php echo the_post_thumbnail_url('large')?>" style="width: 100%;">
		<div class="container">
			<div class="content-over position-absolute animated appear delay2 duration4">
				<img src="<?php the_field('logo_pr');?>" class="logo-pr" alt="Logo del proyecto <?php the_title(); ?>">  	
			</div>			
		</div>
</section>

<section id="breadcrumbs">
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );} ?>
	</div>
</section>

<section id="caracteristicas">
	<div class="container">	
		<div class="row">
			<div class="col-12 col-md-6">
				<h2><?php the_title(); ?></h2>
				<a href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share">Share</a>
				<h2>Tipología</h2>
				<?php the_field('tipologia'); ?><br>

				<a href="<?php the_field('pdf'); ?>" class="btn btn-primary" target="_blank">Descargar PDF</a>

				<h2>Amanities</h2>
				<?php the_field('amenities'); ?>

				<h2>Avance de obra</h2>
				<?php the_field('avance'); ?>
			</div>
			<div class="col-12 col-md-6">
				<div class="row">
					<div class="text-vert col-md-1">
						<h1 class="display-3">barrio</h1>
					</div>
					<div class="col ">
						<?php the_content(); ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section id="mapa" class="container-fluid">
	<div class="row">
		<?php $pepe = get_field('map_id',false); ?>
    	<?php echo do_shortcode('[mappress mapid="' . $pepe . '"]'); ?>
	</div>
</section>

<section id="galery-masonry" class="galery-masonry container-fluid">
	<div class="row">
        <?php
        if( class_exists('Dynamic_Featured_Image') ) {
        global $dynamic_featured_image;
        $featured_images = $dynamic_featured_image->get_featured_images( );
        } ?>

        <!-- Image Gallery -->
        <!-- For Lightbox config check wp-admin/options-general.php?page=jquery-lightbox-options -->
        <div class="container">
            <div class="row">
            <h1 class="entry-title">Galería</h1>
                <div class="grid">
                    <?php foreach ($featured_images as $key => $value): ?>
                        <?php $img_feature_url = $value['full']; ?>
                        <?php $img_feature_alt = $dynamic_featured_image->get_image_alt($img_feature_url);?>
                        <?php $img_feature_caption = $dynamic_featured_image->get_image_caption($img_feature_url);?>
                        <div class="grid-item">
                            <a href="<?php echo($img_feature_url);?>" rel="lightbox" title="<?php echo($img_feature_caption);?>">
                                <img src="<?php echo($img_feature_url);?>" alt="<?php echo($img_feature_alt); ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
	</div>
</section>

	<?php }
}

wp_reset_postdata();
?>

<section id="proyectos-slider">
	<div class="container">
		<h1 class="entry-title">Proyectos</h1>
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="btn btn-link active" id="pills-arg-tab" data-bs-toggle="pill" data-bs-target="#pills-arg" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ARGENTINA</button>
			</li>
			<li class="nav-item" role="presentation">
			<span> | </span><button class="btn btn-link" id="pills-uru-tab" data-bs-toggle="pill" data-bs-target="#pills-uru" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">URUGUAY</button>
			</li>
			<li class="nav-item" role="presentation">
			<span> | </span><button class="btn btn-link" id="pills-esp-tab" data-bs-toggle="pill" data-bs-target="#pills-esp" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ESPAÑA</button>
			</li>
		</ul> 
		<div class="tab-content" id="pills-tabContent"> <!-- content pills -->
			<div class="tab-pane fade show active" id="pills-arg" role="tabpanel" aria-labelledby="pills-arg-tab" tabindex="0">
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
								<div class="img-wrapper"><img src="<?php the_field('carousel_img')?>" class="" alt="..."> </div>

								<div class="card-body">
								<div class="row">
									<div class="col-12 title">
										<h5 class="card-title text-white"><?php the_title(); ?></h5>
									</div>
									<div class="col-12 link">
									<a href="<?php the_permalink();?>" class="btn btn-light btn-card">Descubrir</a>
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
				</div>
			</div>
			<div class="tab-pane fade" id="pills-uru" role="tabpanel" aria-labelledby="pills-uru-tab" tabindex="0">
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
							<div class="img-wrapper"><img src="<?php the_field('carousel_img')?>" class="" alt="..."> </div>
								<div class="card-body">
									<!-- <h5 class="card-title"><?php the_title(); ?></h5><span><?php echo $post_n_uru?></span> <span><?php echo $pais;?></span> -->
									<a href="<?php the_permalink();?>" class="btn btn-light btn-card">Descubrir</a>
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
				</div>					
			</div>
			<div class="tab-pane fade" id="pills-esp" role="tabpanel" aria-labelledby="pills-esp-tab" tabindex="0">
				<div id="carouselEspControls" class="carousel" data-bs-ride="carousel">
					<div class="carousel-inner">
					<!-- Projectos Loop Esp -->
					<?php $args = array(
						'post_type' => 'proyecto',
						'meta_key' => 'pais',
						'meta_value' => 'esp'
					);
					$the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php $post_n_esp = $post_n_esp + 1?>
					<?php ($post_n_esp == 1) ? $post_class = "active" : $post_class = "" ?>						
						<div id="id-carousel-item-esp" class="carousel-item <?php echo $post_class ?>">
							<div class="card">
							<div class="img-wrapper"><img src="<?php the_field('carousel_img')?>" class="" alt="..."> </div>
								<div class="card-body">
									<!-- <h5 class="card-title"><?php the_title(); ?></h5><span><?php echo $post_n_esp?></span> <span><?php echo $pais;?></span> -->
									<a href="<?php the_permalink();?>" class="btn btn-light btn-card">Descubrir</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselEspControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselEspControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>					
			</div>
		</div>
	</div>

	<div class="container text-center">
		<a href="./proyectos" class="btn btn-secondary btn-card mt-4 mb-4">Ver todos</a>
	</div>
</section>



<section id="contact-form" class="fluid mb-3 mt-3">
			<div class="container">
			<h1 class="entry-title">Contactanos</h1>
				<div class="row">
					<div class="col">
					<form class="row g-3">
						<div class="col-md-6">
							<label for="inputEmail4" class="form-label">Email</label>
							<input type="email" class="form-control" id="inputEmail4">
						</div>
						<div class="col-md-6">
							<label for="inputPassword4" class="form-label">Password</label>
							<input type="password" class="form-control" id="inputPassword4">
						</div>
						<div class="col-12">
							<label for="inputAddress" class="form-label">Address</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
						</div>
						<div class="col-12">
							<label for="inputAddress2" class="form-label">Address 2</label>
							<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						</div>
						<div class="col-md-6">
							<label for="inputCity" class="form-label">City</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
						<div class="col-md-4">
							<label for="inputState" class="form-label">State</label>
							<select id="inputState" class="form-select">
							<option selected>Choose...</option>
							<option>...</option>
							</select>
						</div>
						<div class="col-md-2">
							<label for="inputZip" class="form-label">Zip</label>
							<input type="text" class="form-control" id="inputZip">
						</div>
						<div class="col-12">
							<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Check me out
							</label>
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Sign in</button>
						</div>
						</form>
					</div>
					<div class="col offset-1">
						<h3>UNITE A LA FAMILIA</h3>
						<p>ARGENTINA: (+5411) 5258·8788</p>
						<p>URUGUAY: (+598) 2927·2347</p>
						<p>contacto@urbanestate.com.ar</p>
						<i class="bi bi-facebook"></i><span> @UrbanEstateLive</span><br>
						<i class="bi bi-instagram"></i><span> @UrbanEstateLive</span><br>
						<i class="bi bi-youtube"></i><span> @urbanestate4035</span><br>
						<i class="bi bi-linkedin"></i><span> company/urban-estate-live/</span>
					</div>
				</div>
			</div>
</section>


<?php get_footer(); ?>


