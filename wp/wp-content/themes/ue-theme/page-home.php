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
		<?php $args = array(
			'post_type' => 'page',
			'pagename' => 'home-page'
			);
		$the_query = new WP_Query( $args ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
    	<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
		<?php $video_url = get_field('video_bg',$id_query->post->ID,[false]); ?>
			<?php if ($video_url) : ?>
				<div class="video-overflow">
				<video loop="true" autoplay="autoplay" muted src="<?php echo $video_url;?>" type="video/mp4" class="hover-to-play w-100"></video>
				</div>
			<?php else : ?>
		
				<img src="<?php echo the_post_thumbnail_url('large')?>" style="width: 100%;">
			
			<?php endif;  ?>
		<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		<div class="container">
			<div class="content-over position-absolute animated appear delay2 duration4">
				<h1 class="display-2">RENTABILIDAD</h1>
				<h1 class="display-2">EXPERIENCIA</h1>
				<h1 class="display-2">EXELENCIA</h1>
				<h2 class="display-3">Viví mejor, viví como querés</h2>
			</div>
		</div>

	</section>

	
<!-- End Main -->

<section id="live-somos">
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-2 col-lg-1 col-xs-12 offset-md-4 offset-lg-5 offset-xl-5 mt-5 ">
				<img src="/wp-content/uploads/2023/03/live.somos_.png" width="100px" alt="">
			</div>
			<div class="col mt-5 ms-2 ms-xl-4 ms-lg-5">
				<p>Urban Estate, una empresa de desarrolladores de emprendimientos inmobiliarios con oficina ubicada en av. libertador 7766, en el barrio de nuñez, buenos aires, argentina.</p>
				<p>Realizamos proyectos a medida de los inversores, prevaleciendo siempre una buena ubicación y el mejor precio de reventa.</p>
				<p>Trabajamos con un equipo de profesionales de diseño, construcción, administración y venta de inmuebles para brindar la mejor rentabilidad en su inversión.</p>
			</div>
		</div>
	</div>
</section>

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

<section id="banner-proxima-inversion" class="fluid mt-5 mb-5">
	<div class="img-overflow">
			<img src="/wp-content/uploads/2023/03/cafe-office.webp" class="img-fluid">
			<div class="text-center block-display">
				<h1 class="display-2 text-white">Conocé tu próxima inversión</h1>
				<h2 class="display-3 text-white">Tomemos un café</h1>
				<a href="#contact-form" class="btn btn-secondary btn-card mt-1 mb-1">Escríbenos</a>
			</div>
	</div>
</section>

<section id="servicios" class="mb-5 mt-5">
	<div class="container-md">
		<h1 class="entry-title">Servicios</h1>
		<div class="row">
			<div class="col-md-6 mb-2">
				<div class="card text-bg-dark">
					<img src="https://dummyimage.com/200x130/616161/000000.png" class="img-fluid card-img" alt="">
					<div class="card-img-overlay">
						<h1 class="card-title">Invertí<br>en vivienda</h1>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card text-bg-dark">
						<img src="https://dummyimage.com/200x130/616161/000000.png" class="img-fluid card-img" alt="">
						<div class="card-img-overlay">
							<h1 class="card-title">Aumentá <br> tu rentabilidad</h1>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="numeros" class="mb-5 mt-5 pt-5">
	<div class="container-fluid pt-4 pb-4" style="background-color:slategrey;">
		<div class="container text-center">
			<div class="counters row align-items-start">
					<div class="counter col-md-3 col-xs-12">
						<h1 class="display-1"><span data-count="3">0</span></h1>
						<h3>PAÌSES</h3>
					</div>
					<div class="counter col-md-3 col-xs-12">
						<h1 class="display-1"><span data-count="15">0</span></h1>
						<h3>AÑOS DE EXPERIENCIA</h3>
					</div>
					<div class="counter col-md-3 col-xs-12">
						<h1 class="display-1"><span data-count="60">0</span></h1>
						<h3>DESARROLLOS</h3>
					</div>
					<div class="counter col-md-3 col-xs-12">
						<h1 class="display-1"><span data-count="6000">0</span></h1>
						<h3>CLIENTES FELICES</h3>
					</div>
			</div>
		</div>
	</div>
</section>

<section id="contact-form" class="fluid mb-3 mt-5">
			<div class="container">
			<h1 class="entry-title">Contactanos</h1>
				<div class="row">
					<div class="col-lg-6 col-md-12">
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
					<div class="col-lg-5 col-md-12 offset-lg-1 mt-lg-0 mt-5 mb-2">
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


<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
