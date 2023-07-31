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
	<!-- Check Url parameters to show the Toast mesages -->
	<script>
		function getUrl() {
			const queryString = window.location.search;
			const urlParams = new URLSearchParams(queryString);
			msg = urlParams.get('msg');
			return msg
		}
		if (getUrl() == '913716') {
				$(document).ready(function(){
  				$('#toast-n').toast('show');
			});		
		} if (getUrl() == '812559'){
			$(document).ready(function(){
  				$('#toast-c').toast('show');
			});		
		}
	</script>
	<div class="toast position-absolute top-50 start-50 translate-middle" role="alert" aria-live="assertive" aria-atomic="true" id="toast-n" style="z-index:1000;">
		<div class="toast-header">
			<strong class="me-auto">Suscripción newsletter</strong>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
		</div>
		<div class="toast-body">Muchas gracias por suscribirte, pronto recibirás las novedades.</div>
	</div>
	<div class="toast position-absolute top-50 start-50 translate-middle" role="alert" aria-live="assertive" aria-atomic="true" id="toast-c" style="z-index:1000;">
		<div class="toast-header">
			<strong class="me-auto">Contacto</strong>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
		</div>
		<div class="toast-body">¡Gracias por contactarte! <br>A la brevedad nos comunicaremos.</div>
	</div>	
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
				<img class="d-block d-sm-none" id="img-on-mobile" src="/wp-content/themes/ue-theme/img/baires.png" alt="live somos">
				<video autoplay muted loop class="hover-to-play w-100 d-none d-sm-block">
					<source src="<?php echo $video_url;?>" type="video/mp4">
				</video>
				</div>

			<?php else : ?>
		
				<img src="<?php echo the_post_thumbnail_url('large')?>" style="width: 100%;">
			
			<?php endif;  ?>
		<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		<div class="container">
			<div class="content-over position-absolute animated appear delay2 duration4">
				<h1 class="display-1" id="l1">Rentabilidad</h1>
				<h1 class="display-1" id="l2">y excelencia</h1>
				<h1 class="display-3" id="l3">en desarrollos inmobiliarios</h1>
			</div>
		</div>

	</section>

	
<!-- End Main -->

<section id="live-somos">
	<div class="container clearfix">
		<div class="row">
			<div id="logo-live" class="col-md-3 col-lg-2 col-xs-12 offset-md-3 offset-lg-4 offset-xl-4 mt-5">
				<img id="live-somos" src="/wp-content/themes/ue-theme/img/live.svg" alt="live somos">
			</div>
			<div class="col-12 col-md-1">
			<div class="row text-vert align-self-center">
					<h1 id="somos" class="eds-on-scroll eds-scroll-visible">
						Somos
					</h1>
				</div>
			</div>

			<div class="col mt-3 mt-md-5 ms-xl-2 ms-lg-3 txt-somos">
				<p>Somos Urban Estate, una empresa de desarrollos inmobiliarios a medida de los inversores en Argentina y Uruguay. 
					Trabajamos en los proyectos desde el inicio hasta su completa entrega y posventa. Además ofrecemos servicio de renting para nuestros clientes.</p>
				<p>Ofrecemos posibilidades de inversión de gran rentabilidad, en ubicaciones privilegiadas de las ciudades más importantes de la región.</p>
				<p>Nuestro equipo de profesionales, de amplia experiencia y trayectoria, trabaja de manera interdisciplinaria, 
					logrando proyectos de gran calidad de diseño y construcción, y asesorando desde la administración, venta y renta de los inmuebles.</p>
			</div>
		</div>
	</div>
</section>

<!-- Component Projectos slider -->
<?php $section_title = 'Desarrollos'; ?>
<?php include get_template_directory() . '/inc/projectos-slider.php'; ?>

<!-- Banner Próxima Inversión -->
<?php include get_template_directory() . '/inc/banner-inv-sala.html'; ?>

<section id="servicios">
	<div class="container-md">
		<h1 class="entry-title">Inversiones inmobiliarias</h1>
		<div class="row">
			<div class="col-md-6 mb-2">
				<a href="/inverti-con-nosotros">
				<div class="card animated fadeIn duration2 eds-on-scroll ">
					<img src="/wp-content/themes/ue-theme/img/servicio-live.jpg" class="img-fluid card-img" alt="">
					<div class="card-img-overlay">
						<h1 class="card-title" style="font-weight: 600 !important;">Invertí<br>en ladrillos</h1>
						<h4 class="mousehover">Sé parte desde el principio</h4>
						<div class="img-container d-flex justify-content-end">
							<img src="/wp-content/themes/ue-theme/img/live.svg" class="align-self-center" alt="Logo Live" style="max-width:7rem;">
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col-md-6">
				<a href="/urbanrent">
				<div class="card animated fadeIn duration2 eds-on-scroll ">
						<img src="/wp-content/themes/ue-theme/img/servicio-rent.jpg" class="img-fluid card-img" alt="">
						<div class="card-img-overlay">
							<h1 class="card-title" style="font-weight: 600 !important;">Comprá  <br>y rentá</h1>
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

<section id="numeros">
	<div class="container-fluid pt-4 pb-4">
		<div class="container text-center pt-2">
			<div class="counters row align-items-start">
					<div class="counter col-md-3 col-xs-12">
						<h1 class="numero"><span data-count="2">0</span></h1>
						<h4>PAÍSES</h4>
					</div>
					<div class="counter col-md-3 col-xs-12">
						<h1 class="numero"><span data-count="15">0</span></h1>
						<h4>AÑOS DE EXPERIENCIA</h4>
					</div>
					<div class="counter col-md-3 col-xs-12">
						<h1 class="numero"><span data-count="14">0</span></h1>
						<h4>DESARROLLOS</h4>
					</div>
					<div class="counter col-md-3 col-xs-12">
						<h1 class="numero"><span data-count="300">0</span></h1>
						<h4>CLIENTES FELICES</h4>
					</div>
			</div>
		</div>
	</div>
</section>

<?php include get_template_directory() . '/inc/newsletter-form.html'; ?>

<?php include get_template_directory() . '/inc/section-contacto.html'; ?>

<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
