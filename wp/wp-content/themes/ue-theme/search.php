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
