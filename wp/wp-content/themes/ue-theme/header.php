<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
	<!-- adding bootstrap icons -->
	<link href="/wp-content/themes/ue-theme/node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'ue-theme' ); ?></a>

<div id="wrapper">
	<?php // If search page change the header class
	if ( is_search() ) {
		$header_class = 'position-relative bg-secondary';
	}
	else {
		$header_class = 'position-absolute';
	} 	
	?>
	<header class="<?php echo $header_class; ?> w-100">
		<!-- Pre header -->
		<div class="pre-header text-end d-md-block d-none">
			<div class="container">
				<i class="bi bi-envelope me-2" style="font-size: 1rem; color: white;"></i>
				<a href="mailto:contacto@urbanestate.com.ar">contacto@urbanestate.com.ar</a>
				<i class="bi bi-telephone ms-5 me-2" style="font-size: 1rem; color: white;"></i>
				<a href="tel:+541152588788">+54 11 5258 8788</a>
			</div>
		</div>
		<!-- end pre-header -->
		<nav id="header" class="navbar navbar-expand-md pt-3 <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="/wp-content/themes/ue-theme/img/UrbanEstateLogo.svg" alt="Urban Estate Logo" />
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'ue-theme' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">

					<label>
						<form class="search-form my-2 my-lg-0 pe-3" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
								<span class="">
									<input type="search" name="s" class="search-field form-control" placeholder="" title="<?php esc_attr_e( 'Search', 'ue-theme' ); ?>" />
								</span>
								<!-- <button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'ue-theme' ); ?></button> -->						
						</form>
					</label>
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'menu_class'     => 'navbar-nav',
								'container'      => '',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
								'theme_location' => 'main-menu',
							)
						);

						if ( '1' === $search_enabled ) :
					?>

					<?php
						endif;
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

