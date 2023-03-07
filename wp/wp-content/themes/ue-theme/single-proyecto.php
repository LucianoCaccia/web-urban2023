<?php
/**
 * The Template for displaying all single posts.
 */

get_header();

// Breadcrumbs
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}

if ( have_posts() ) {
	while ( have_posts() ) {

		the_post(); ?>
        <img src="<?php echo the_post_thumbnail_url('large')?>" style="width: 100%;">
		<h2><?php the_title(); ?></h2>
        <h4><?php the_permalink(); ?></h4>
        <div><img src="<?php the_field('logo_pr');?>" alt="Logo del proyecto <?php the_title(); ?>">  </div>
		<div class="col-6"><?php the_content(); ?></div>
        <hr>

        <h2>Tipología</h2>
        <?php the_field('tipologia'); ?><br>

        <a href="<?php the_field('pdf'); ?>" class="btn btn-primary" target="_blank">Descargar PDF</a>

        <h2>Amanities</h2>
        <?php the_field('amenities'); ?>

        <h2>Avance de obra</h2>
        <?php the_field('avance'); ?>
        
        <?php $pepe = get_field('map_id',false); ?>
        <?php echo do_shortcode('[mappress mapid="' . $pepe . '"]'); ?>

        <?php
        if( class_exists('Dynamic_Featured_Image') ) {
        global $dynamic_featured_image;
        $featured_images = $dynamic_featured_image->get_featured_images( );
        } ?>

        <!-- Image Gallery -->
        <div class="container">
            <div class="row">
                <div class="grid">
                    <?php foreach ($featured_images as $key => $value): ?>
                        <?php $img_feature_url = $value['full']; ?>
                        <?php $img_feature_alt = $dynamic_featured_image->get_image_alt($img_feature_url);?>
                        <div class="grid-item">
                            <img src="<?php echo($img_feature_url);?>" alt="<?php echo($img_feature_alt); ?>">
                        </div>
                        
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

	<?php }
}

wp_reset_postdata();

$count_posts = wp_count_posts();

if ( $count_posts->publish > '1' ) :
	$next_post = get_next_post();
	$prev_post = get_previous_post();
?>


<hr class="mt-5">
<div class="post-navigation d-flex justify-content-between">
	<?php
		if ( $prev_post ) {
			$prev_title = get_the_title( $prev_post->ID );
	?>
		<div class="pr-3">
			<a class="previous-post btn btn-lg btn-outline-secondary" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" title="<?php echo esc_attr( $prev_title ); ?>">
				<span class="arrow">&larr;</span>
				<span class="title"><?php echo wp_kses_post( $prev_title ); ?></span>
			</a>
		</div>
	<?php
		}
		if ( $next_post ) {
			$next_title = get_the_title( $next_post->ID );
	?>
		<div class="pl-3">
			<a class="next-post btn btn-lg btn-outline-secondary" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo esc_attr( $next_title ); ?>">
				<span class="title"><?php echo wp_kses_post( $next_title ); ?></span>
				<span class="arrow">&rarr;</span>
			</a>
		</div>
	<?php
		}
	?>
</div><!-- /.post-navigation -->
<?php
endif;

get_footer();
