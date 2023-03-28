<?php
/**
 * Template Name: Page: Inverti con nosotros
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
                <h1 class="display-2">Invertí con</h1>
                <h1 class="display-2">nosotros</h1>
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
    <section id="fixed-content">
        <div class="row">
            <div class="offset-md-2 col-md-6">
                <h2>Desarrollamos proyectos inmobiliarios desde el inicio hasta la posventa.</h2>
                <p>Seleccionamos rigurosamente la zona de emplazamiento de cada desarrollo a través de un estudio que nos permita evaluar el valor añadido para los inversores.</p>
                <p>Nos enfocamos en abarcar la totalidad de la cadena de valor del negocio, comprando el suelo y diseñando un proyecto de altos estándares de ubicación y habitabilidad, así como de reventa.</p>
                <p>Preparamos el entorno de manera inteligente, optimizando los recursos.</p>
                <p>Construimos edificios de alta calidad con diferentes funcionalidades y tipologías, pensando en las necesidades de los inversores y de las personas y familias que los habitarán.</p>
                <p>Tenemos en cuenta la posibilidad de usufructo de las viviendas como bienes rentables en dólares para ayudar a nuestros clientes a optimizar sus inversiones.</p>
                <p>Gestionamos el servicio de venta de manera eficiente, asesorando a los posibles compradores desde todos los puntos de vista profesionales, dentro de nuestra propia empresa. Por eso contamos con un equipo multidisciplinario que se implica en cada decisión.</p>
                <p>Pensamos en todas las oportunidades y posibilidades de los inversores asesorándolos para una compra exitosa y rentable, ofreciéndoles distintas modalidades de financiación.</p>
                <p>Una vez finalizado el proyecto y adquirido el inmueble, ofrecemos un servicio de posventa orientado a ayudar a los compradores a rentar las viviendas o a tener una experiencia óptima durante su estadía en ellas.</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="/wp-content/themes/ue-theme/img/inverti-con-nosotros.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-6">
                <div class="background pt-4 ps-4 pb-4" style="background-color: #E8E8E8;">
                    <h2> Invertí con nosotros</h2>
                    <ul class="ps-0">
                        <ol class="ps-0">• Estamos al día con las últimas tendencias</ol>
                        <ol class="ps-0">• Pensamos en la sostenibilidad</ol>
                        <ol class="ps-0">• Creamos proyectos rentables</ol>
                        <ol class="ps-0">• Diseñamos entornos funcionales y acogedores</ol>
                        <ol class="ps-0">• Pensamos en todos los detalles y terminaciones</ol>
                        <ol class="ps-0">• Construimos en las mejores zonas</ol>
                        <ol class="ps-0">• Brindamos formas de financiación</ol>
                        <ol class="ps-0">• Te asesoramos para rentar tu departamento o local</ol>
                        <ol class="ps-0">• Nos encargamos del servicio de renta temporal 100%</ol>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-2 ">
                        <img class="mt-4" src="/wp-content/themes/ue-theme/img/airbnb.svg" style="max-height: 2.2rem;">
                    </div>
                    <div class="col-10">
                        <h2 class="pt-4">Airbnb ready</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img class="mt-4" src="/wp-content/themes/ue-theme/img/geo.svg" style="max-height: 2.7rem;">
                    </div>
                    <div class="col-10">
                        <h2 class="pt-4">Zonas premium</h2>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>
<div class="fluid">
    <section id="banner-proxima-inversion" class="fluid mt-5 mb-5">
	    <div class="img-overflow">
			<img src="/wp-content/themes/ue-theme/img/tomemoscafe.jpg" class="img-fluid">
			<div class="text-center block-display">
				<h1 class="display-3 text-white pb-4">Descubrí tu próxima inversión</h1>
				<a href="#contact-form" class="btn btn-secondary btn-card mt-1 mb-1 ps-4 pe-4">Tomemos un café</a>
			</div>
	    </div>
    </section>
</div>
<!-- /#post-<?php the_ID(); ?> -->
<?php
// Section Contacto
include get_template_directory() . '/inc/section-contacto.html';
	

get_footer();