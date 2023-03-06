<?php
/**
 * The Template for displaying Proyectos.
 */
/**
 * Template Name: Proyectos
 * Description: Page template with no sidebar.
 *
 */

get_header();


?>

<!-- Add main tag to each one template page -->
<main id="main" class="container-fluid videofull"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
	<section id="slider-video" class="fluid">
		<?php $args = array(
			'post_type' => 'page',
			'pagename' => 'proyectos'
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


<section id="proyectos-slider">
	<div class="container">
        <div class="mt-4 mb-4">
            <h1 class="entry-title">ARGENTINA</h1>
            <h2>BUENOS AIRES</h2>
            <hr>
        </div>
        <div id="carouselArgControls" class="carousel" data-bs-ride="carousel">
			<div class="carousel-inner">
                <!-- Projectos Loop Arg -->
                <?php $args = array(
                    'post_type' => 'proyecto',
                    'meta_key' => 'pais',
                    'meta_value' => 'arg'
                );
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $post_n_arg = $post_n_arg + 1?>
                <?php ($post_n_arg == 1) ? $post_class = "active" : $post_class = "" ?>	
                    <div class="carousel-item <?php echo $post_class ?>">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5><span><?php echo $post_n_arg?></span> <span><?php echo $pais;?></span>
                                <a href="<?php the_permalink();?>" class="btn btn-primary">Go <?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
			</div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselArgControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselArgControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
		</div> <!-- end of slider -->

        <div class="mt-4 mb-4">
            <h1 class="entry-title">URUGUAY</h1>
            <h2>MONTEVIDEO</h2>
            <hr>
        </div>        
        <div id="carouselUruControls" class="carousel" data-bs-ride="carousel">
			<div class="carousel-inner">
                <!-- Projectos Loop Uru -->
                <?php $args = array(
                    'post_type' => 'proyecto',
                    'meta_key' => 'pais',
                    'meta_value' => 'uru'
                );
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $post_n_uru = $post_n_uru + 1?>
                <?php ($post_n_uru == 1) ? $post_class = "active" : $post_class = "" ?>	
                    <div class="carousel-item <?php echo $post_class ?>">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5><span><?php echo $post_n_uru?></span> <span><?php echo $pais;?></span>
                                <a href="<?php the_permalink();?>" class="btn btn-primary">Go <?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
			</div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselUruControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselUruControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
		</div> <!-- end of slider -->

        <div class="mt-4 mb-4">
            <h1 class="entry-title">ESPAÑA</h1>
            <h2>MADRID</h2>
            <hr>
        </div>        
        <div id="carouselEspControls" class="carousel" data-bs-ride="carousel">
			<div class="carousel-inner">
                <!-- Projectos Loop Esp -->
                <?php $args = array(
                    'post_type' => 'proyecto',
                    'meta_key' => 'pais',
                    'meta_value' => 'esp'
                );
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $post_n_esp = $post_n_esp + 1?>
                <?php ($post_n_esp == 1) ? $post_class = "active" : $post_class = "" ?>	
                    <div class="carousel-item <?php echo $post_class ?>">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5><span><?php echo $post_n_esp?></span> <span><?php echo $pais;?></span>
                                <a href="<?php the_permalink();?>" class="btn btn-primary">Go <?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
			</div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselEspControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselEspControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
		</div> <!-- end of slider -->

    </div>
</section>



<?php get_footer(); ?>
