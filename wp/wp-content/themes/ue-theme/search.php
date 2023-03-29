<?php
/**
 * The Template for displaying Search Results pages.
 */

get_header();
?>

<main class="container">

<?php
if ( have_posts() ) :
?>	
	<header class="page-header">
		<h1 class="page-title mt-3"><?php printf( esc_html__( 'Resultados para: %s', 'ue-theme' ), get_search_query() ); ?></h1>
	</header>
<?php
	get_template_part( 'archive', 'loop' );
?>

	<footer>
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

						<div class="container mt-5">
								<div class="row">
									<h3 class="col-7 row">SUMATE AL STAFF</h3>
									<button class="col btn btn-light btn-card mt-1 mb-2 ps-4 pe-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseForm" aria-expanded="false" aria-controls="collapseForm">Adjuntar datos</button>
								</div>
							<div class="collapse" id="collapseForm">
								<?php echo do_shortcode('[contact-form-7 id="216" title="Staff"]'); ?>
							</div>
						</div>



						
					</div>
				</div>
			</div>
		</section>
	</footer>

<?php

else :
?>
	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title mt-3"><?php esc_html_e( 'No hay resultados', 'ue-theme' ); ?></h1>
		</header><!-- /.entry-header -->
		<p class="mb-4">Disculpa, pero no hay contenido con ese criterio de búsqueda. <br> Por favor intenta otra vez con otras palabras</p>

		<?php
			// get_search_form();
		?>
	</article><!-- /#post-0 -->
<?php
endif;

wp_reset_postdata();

get_footer();
