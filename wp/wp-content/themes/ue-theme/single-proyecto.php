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
	<?php if (has_post_thumbnail( $post->ID ) ) : ?>

		<img src="<?php echo the_post_thumbnail_url('large')?>" style="width: 100%; filter: brightness(65%);">

	<?php else : ?>
		<div class="video-overflow">
			<img src="/wp-content/themes/ue-theme/img/default-header.jpeg" style="width:100%; filter: brightness(0.65);" alt="">
		</div>
	<?php endif;  ?>		
			<div class="container">
			<div class="content-over position-absolute">
				<?php if (get_field('logo_pr')) : ?>
					<img src="<?php the_field('logo_pr');?>" style="width:55rem;" class="logo-pr animated appear delay2 duration4" alt="Logo del proyecto <?php the_title(); ?>">  	
				<?php endif; ?>
			</div>			
		</div>
</section>

<section id="breadcrumbs">
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );} ?>
	</div>
</section>

<section id="caracteristicas" class="mt-5">
	<div class="container">	
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="mb-5 d-flex flex-row align-items-end">
					<h3 class="mb-0">Tipología</h3>
					<p class="lead mb-0 ms-3"><?php the_field('tipologia'); ?></p>
				</div>
				<div class=" mt-4 mb-4">
					<h3>Amenities</h3>
					<div class="row mt-4 amenities">
						<?php $amenities = get_field('amenities', false, false); ?>					
						<?php // var_dump($amenities); ?>
						<?php foreach ($amenities as $key => $value): ?>
							<?php switch ($value) { 
								case 'parrilla':
									echo('<div class="item me-2">');
									echo('<img src="/wp-content/themes/ue-theme/img/amenities/parrilla.svg">');
										echo('<div>');
										echo('<p class="small mt-2">Parrilla</p>');
										echo('</div>');
									echo('</div>');
								break;
								case 'loundry':
									echo('<div class="item me-2">');
									echo('<img src="/wp-content/themes/ue-theme/img/amenities/laundry.svg">');
										echo('<div>');
										echo('<p class="small mt-2">Laundry</p>');
										echo('</div>');
									echo('</div>');
								break;
								case 'gimnasio':
									echo('<div class="item me-2">');
									echo('<img src="/wp-content/themes/ue-theme/img/amenities/gimnasio.svg">');
										echo('<div>');
										echo('<p class="small mt-2">Gimnasio</p>');
										echo('</div>');
									echo('</div>');
								break;
								case 'sum':
									echo('<div class="item me-2">');
									echo('<img src="/wp-content/themes/ue-theme/img/amenities/sum.svg" style="max-height:2.2rem;">');
										echo('<div>');
										echo('<p class="small mt-2">Salón usos múltiples</p>');
										echo('</div>');
									echo('</div>');
								break;
								case 'cochera':
									echo('<div class="item me-2">');
									echo('<img src="/wp-content/themes/ue-theme/img/amenities/cochera.svg">');
										echo('<div>');
										echo('<p class="small mt-2">Cochera</p>');
										echo('</div>');
									echo('</div>');
								break;								
								case 'bici':
									echo('<div class="item me-2">');
									echo('<img src="/wp-content/themes/ue-theme/img/amenities/bicis.svg" style="max-height:3.1rem;">');
										echo('<div>');
										echo('<p class="small mt-2">Parking para bicis</p>');
										echo('</div>');
									echo('</div>');
								break;
								case 'piscina':
									echo('<div class="item me-2">');
									echo('<img src="/wp-content/themes/ue-theme/img/amenities/piscina.svg" style="max-height:3.1rem;">');
										echo('<div>');
										echo('<p class="small mt-2">Piscina</p>');
										echo('</div>');
									echo('</div>');
								break;																
								case 'rooftop':
									echo('<div class="item">');
									echo('<img src="/wp-content/themes/ue-theme/img/amenities/rooftop.svg" style="max-height:3.1rem;">');
										echo('<div>');
										echo('<p class="small mt-2">Rooftop</p>');
										echo('</div>');
									echo('</div>');
								break;
							} ?>
						<?php endforeach ?>
					</div>
				</div>
				<div class=" mt-2 mb-5">
					<h3>Avance de obra</h3>
				</div>
				<div class="row mb-1">
					<?php $avances = get_field('avance', false, false); ?>
					<?php if (empty($avances)) :?>
						<?php $avances = array_fill(0,1,'pozo');?>
					<?php endif;?>
					<?php $count_avances = count($avances) / 4 * 100; ?>
					<?php foreach ($avances as $key => $value): ?>
						<?php switch ($value) { 
							case 'pozo':
								$style_pozo = "filter: brightness(0);";
							break;
							case 'obra':
								$style_obra = "filter: brightness(0);";					
							break;
							case 'alba':
								$style_alba = "filter: brightness(0);";
							break;
							case 'detalles':
								$style_detalles = "filter: brightness(0);";
							break;
						} ?>
					<?php endforeach ?>
					<div class="col-2 text-center">
						<img src="/wp-content/themes/ue-theme/img/avance/demo.svg" style="max-height:3rem; filter: brightness(2.4); <?php echo $style_pozo ?>">
						<p class="small mt-2">Demolición</p>
					</div>
					<div class="col-2 text-center">
						<img src="/wp-content/themes/ue-theme/img/avance/obra.svg" style="max-height:3rem; filter: brightness(2.4); <?php echo $style_obra?>">
						<p class="small mt-2">Obra</p>
					</div>
					<div class="col-2 text-center">
						<img src="/wp-content/themes/ue-theme/img/avance/alba.svg" style="max-height:3rem; filter: brightness(2.4); <?php echo $style_alba ?>">
						<p class="small mt-2">Albañilería</p>
					</div>
					<div class="col-2 text-center">
						<img src="/wp-content/themes/ue-theme/img/avance/term.svg" style="max-height:3rem; filter: brightness(2.4); <?php echo $style_detalles ?>">
						<p class="small mt-2">Terminaciones</p>
					</div>
				</div>

				<?php if ($count_avances == 100) : ?>
					<?php $bar_color = 'bg-danger'; ?>
					<?php $bar_text = 'DESARROLLO TERMINADO'; ?>
				<?php else: ?>
					<?php $bar_color = 'bg-secondary'; ?>
					<?php $bar_text = ''; ?>
				<?php endif; ?>

				<div class="progress col-8 mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  					<div class="progress-bar <?php echo($bar_color); ?>" style="width: <?php echo($count_avances . '%');?>"><?php echo($bar_text); ?></div>
				</div>

			</div>
			<div class="col-12 col-md-1">

				<div class="row text-vert align-self-center">
					<h1 class="animated fadeInDown delay1 duration1 eds-on-scroll ">
						<?php the_field('barrio'); ?>
					</h1>
				</div>
			</div>

			<div class="col-12 col-md-5">
				<div class="row mt-1">
						<?php the_content(); ?>
						<div class="mt-4">
							<?php if (get_field( "pdf" )): ?>
								<a href="<?php the_field('pdf'); ?>" class="btn btn-secondary btn-card me-3" target="_blank">Descargar PDF</a>
							<?php endif; ?>
							<a href="whatsapp://send?text=<?php the_permalink(); ?>" class="btn btn-secondary btn-card" data-action="share/whatsapp/share">Compartir <i class="bi bi-whatsapp"></i></a>
						</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section id="mapa" class="container-fluid mt-5">
	<div class="row">
		<?php $mapid = get_field('map_id',false); ?>
    	<?php echo do_shortcode('[put_wpgm id=' . $mapid . ']'); ?>
	</div>
</section>

<section id="galery-masonry" class="galery-masonry">
        <?php
        if( class_exists('Dynamic_Featured_Image') ) {
        global $dynamic_featured_image;
        $featured_images = $dynamic_featured_image->get_featured_images( );
        } ?>

        <!-- Image Gallery -->
        <!-- For Lightbox config check wp-admin/options-general.php?page=jquery-lightbox-options -->
        <div class="container">
            <h1 class="entry-title">Galería</h1>
                <div class="masonry ">
                    <?php foreach ($featured_images as $key => $value): ?>
                        <?php $img_feature_url = $value['full']; ?>
                        <?php $img_feature_alt = $dynamic_featured_image->get_image_alt($img_feature_url);?>
                        <?php $img_feature_caption = $dynamic_featured_image->get_image_caption($img_feature_url);?>
                        <div class="masonry-item animated fadeIn duration2 eds-on-scroll">
                            <a href="<?php echo($img_feature_url);?>" rel="lightbox" title="<?php echo($img_feature_caption);?>">
                                <img src="<?php echo($img_feature_url);?>" alt="<?php echo($img_feature_alt); ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
        </div>

</section>

	<?php }
}

wp_reset_postdata();
?>

<!-- Component Projectos slider -->
<?php $section_title = 'Invertí con nosotros'; ?>
<?php include get_template_directory() . '/inc/projectos-slider.php'; ?>

<!-- Section Contacto -->
<?php include get_template_directory() . '/inc/section-contacto.html'; ?>


<?php get_footer(); ?>


