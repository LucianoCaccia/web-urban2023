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
<main id="main" class="container-fluid homepage"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
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
		<?php $pepe = get_field('video_bg',$id_query->post->ID,[false]); ?>
			<?php if ($pepe) : ?>
				
				<video loop="true" autoplay="autoplay" muted src="<?php echo $pepe;?>" type="video/mp4" class="hover-to-play w-100"></video>
				
			<?php else : ?>
		
				<img src="<?php echo the_post_thumbnail_url('large')?>" style="width: 100%;">
			
			<?php endif;  ?>
		<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</section>

	
<!-- End Main -->

<section id="live-somos">
	<div class="container clearfix">
		<div class="row">
			<div class="col-1 offset-md-5">
				<img src="https://dummyimage.com/300x300/ffe3ff/000000.png" width="100px" alt="">
			</div>
			<div class="col">
				<p>Urban Estate, una empresa de desarrolladores de emprendimientos inmobiliarios con oficina ubicada en av. libertador 7766, en el barrio de nuñez, buenos aires, argentina.</p>
				<p>Realizamos proyectos a medida de los inversores, prevaleciendo siempre una buena ubicación y el mejor precio de reventa.</p>
				<p>Trabajamos con un equipo de profesionales de diseño, construcción, administración y venta de inmuebles para brindar la mejor rentabilidad en su inversión.</p>
			</div>
		</div>
	</div>
</section>

<section id="proyectos-slider">
	<?php $args = array(
		'post_type' => 'proyecto'
		// 'posts_per_page' => 3
		);
	$the_query = new WP_Query( $args ); ?>
	<div class="container">
		<h1 class="entry-title">Proyectos</h1>
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
				</li>
			</ul>
				<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">contenido A</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">contenido B</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">contenido C</div>
			</div>
	</div>

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
	<div class="container text-center">
		<a href="./project_cat/todos" class="btn btn-primary">Ver todos</a>
	</div>
	<!-- End loop -->
</section>

<section id="banner-proxima-inversion" class="fluid" style="">
	<div class="">
			<img src="https://dummyimage.com/2000x300/ffe3ff/000000.png" class="img-fluid">
			<div class="text-center" style="position: relative; top: -11rem; height:0">
				<h1>Conocé tu próxima inversión</h1>
				<h1>Tomemos un café</h1>
				<a href="./project_cat/todos" class="btn btn-primary">Ver todos</a>
			</div>
	</div>
</section>

<section id="servicios">
	<div class="container">
		<h1 class="entry-title">Servicios</h1>
		<div class="row">
			<div class="col-md-6"
				<span>Invertí en vivienda</span>
			</div>
			<div class="col-md-6"
				<span>Aumentá tu rentabilidad</span>
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
