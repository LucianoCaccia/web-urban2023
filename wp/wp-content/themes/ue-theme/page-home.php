<?php
/**
 * Template Name: Home Page
 * Description: Page template with no sidebar.
 *
 */

use function Composer\Autoload\includeFile;

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
				<h1 class="display-2">Rentabilidad</h1>
				<h1 class="display-2">y excelencia</h1>
				<h1 class="display-3">en desarrollos inmobiliarios</h1>
			</div>
		</div>

	</section>

	
<!-- End Main -->

<section id="live-somos">
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-2 col-lg-1 col-xs-12 offset-md-4 offset-lg-5 offset-xl-5 mt-5 ">
				<img src="/wp-content/themes/ue-theme/img/live-somos.png" width="100px" alt="">
			</div>
			<div class="col mt-5 ms-2 ms-xl-4 ms-lg-5">
				<p>Urban Estate, una empresa de desarrolladores de emprendimientos inmobiliarios con oficina ubicada en av. libertador 7766, en el barrio de nuñez, buenos aires, argentina.</p>
				<p>Realizamos proyectos a medida de los inversores, prevaleciendo siempre una buena ubicación y el mejor precio de reventa.</p>
				<p>Trabajamos con un equipo de profesionales de diseño, construcción, administración y venta de inmuebles para brindar la mejor rentabilidad en su inversión.</p>
			</div>
		</div>
	</div>
</section>

<!-- Component Projectos slider -->
<?php $section_title = 'Desarrollos'; ?>
<?php include get_template_directory() . '/inc/projectos-slider.php'; ?>

<section id="banner-proxima-inversion" class="fluid mt-5 mb-5">
	<div class="img-overflow">
			<img src="/wp-content/themes/ue-theme/img/tomemoscafe.jpg" class="img-fluid">
			<div class="text-center block-display">
				<h1 class="display-3 text-white pb-4">Descubrí tu próxima inversión</h1>
				<a href="#contact-form" class="btn btn-secondary btn-card mt-1 mb-1 ps-4 pe-4">Tomemos un café</a>
			</div>
	</div>
</section>

<section id="servicios" class="mb-5 mt-5">
	<div class="container-md">
		<h1 class="entry-title">Servicios</h1>
		<div class="row">
			<div class="col-md-6 mb-2">
				<a href="/inverti-en-ladrillos">
				<div class="card  animated fadeIn duration2 eds-on-scroll  ">
					<img src="/wp-content/themes/ue-theme/img/servicio-live.jpg" class="img-fluid card-img" alt="">
					<div class="card-img-overlay">
						<h1 class="card-title">Invertí<br>en ladrillos</h1>
						<h4 class="mousehover">Sé parte desde el principio</h4>
						<div class="img-container d-flex justify-content-end">
							<img src="/wp-content/themes/ue-theme/img/live.svg" class="align-self-center" alt="Logo Live" style="max-width:7rem;">
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col-md-6">
				<a href="/urban-rent">
				<div class="card  animated fadeIn duration2 eds-on-scroll   ">
						<img src="/wp-content/themes/ue-theme/img/servicio-rent.jpg" class="img-fluid card-img" alt="">
						<div class="card-img-overlay">
							<h1 class="card-title">Comprá  <br>y rentá</h1>
							<h4 class="mousehover">Exclusivo para clientes</h4>
							<div class="img-container d-flex justify-content-end">
								<img src="/wp-content/themes/ue-theme/img/UrbanRent.svg" class="align-self-center" alt="Logo Urban Rent" style="max-width:14rem";>
							</div>
						</div>
				</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section id="numeros" class="mb-5 mt-5 pt-5">
	<div class="container-fluid pt-4 pb-4">
		<div class="container text-center pt-5">
			<div class="counters row align-items-start">
					<div class="counter col-md-3 col-xs-12">
						<h1 class="display-1"><span data-count="3">0</span></h1>
						<h3>PAÍSES</h3>
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

<?php include get_template_directory() . '/inc/section-contacto.html'; ?>

<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
