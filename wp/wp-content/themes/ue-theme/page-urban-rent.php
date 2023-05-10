<?php
/**
 * Template Name: Page: Urban Rent
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
            <img class="mt-4 mb-4 logo-rent" src="/wp-content/themes/ue-theme/img/UrbanRent2.svg">
                <h1 class="display-2">Rentá y ganá</h1>
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
            <div class="offset-md-2 col-md-5">
                <h2 class="mb-4">¿Compraste una propiedad con nosotros?</h2>
                <p class="lead mb-1">Sacale más provecho rentandola en dólares.</p>
                <p class="lead mb-3">Nos encargamos de todo.</p>
                <p>Desde UrbanRent nos ocupamos de valorar la propiedad, calculando una renta en dólares para pasajeros temporarios. Publicamos el hospedaje en las mejores plataformas, logrando la aprobación en AirBnB, garantizando un
                gran potencial de alcance y posibilidad de renta temporaria.<br>
                Gestionamos el contrato con tus inquilinos y nos encargamos de los cobros mensuales o temporales.</p>
                <p>Nos encargamos del check in y check out de los huéspedes, así como de las reparaciones o acondicionamientos
                que sean necesarios. </p>
                
            </div>
            <div class="col-md-4 offset-md-1">
                <img class="img-fluid" src="/wp-content/uploads/2023/03/Roosevelt-e1680046211746.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-lg-7 col-md-12 col-12 mt-5">
                <h2>Beneficios</h2>
                <div class="row text-center mt-5 mb-5">
                    <div class="col">
                        <img class="img-fluid mb-3" src="/wp-content/themes/ue-theme/img/beneficios/asistencia.svg" style="max-height: 3rem;">
                        <p>Asistencia a los huéspedes</p>
                    </div>
                    <div class="col">
                        <img class="img-fluid mb-3" src="/wp-content/themes/ue-theme/img/beneficios/calendar.svg" style="max-height: 3rem;">
                        <p>Gestión de reservas</p>
                    </div>
                    <div class="col">
                        <img class="img-fluid mb-3" src="/wp-content/themes/ue-theme/img/beneficios/tiempo.svg" style="max-height: 3rem;">
                        <p>Optimización de reservas</p>
                    </div>
                    <div class="col">
                        <img class="img-fluid mb-3" src="/wp-content/themes/ue-theme/img/beneficios/mano.svg" style="max-height: 3rem;">
                        <p>Cuidado de la propiedad</p>
                    </div>
                    <div class="col">
                        <img class="img-fluid mb-3" src="/wp-content/themes/ue-theme/img/beneficios/cash.svg" style="max-height: 3rem;">
                        <p>Manejo de pagos</p>
                    </div>
                </div>                
            </div>
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
