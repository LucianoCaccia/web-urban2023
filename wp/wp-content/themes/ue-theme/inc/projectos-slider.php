<!-- Component Projectos Slider -->
<section id="proyectos-slider">
	<div class="container">
		<h1 class="entry-title">Proyectos</h1>
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="btn btn-link active" id="pills-arg-tab" data-bs-toggle="pill" data-bs-target="#pills-arg" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ARGENTINA</button>
			</li>
			<li class="nav-item" role="presentation">
			<span> | </span><button class="btn btn-link" id="pills-uru-tab" data-bs-toggle="pill" data-bs-target="#pills-uru" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">URUGUAY</button>
			</li>
		</ul> 
		<div class="tab-content" id="pills-tabContent"> <!-- content pills -->
			<div class="tab-pane fade show active" id="pills-arg" role="tabpanel" aria-labelledby="pills-arg-tab" tabindex="0">
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
						<div id="id-carousel-item-arg" class="carousel-item <?php echo $post_class ?>">
							<div class="card">
								<div class="img-wrapper" style="filter: brightness(65%);">
									<?php if (get_field('carousel_img')) : ?>
										<img src="<?php the_field('carousel_img')?>"  alt="...">
									<?php else : ?>
										<img src="https://picsum.photos/311/461"  alt="...">
									<?php endif; ?>
								</div>

								<div class="card-body">
								<div class="row">
									<div class="col-12 title mb-4">
										<img src="<?php the_field('logo_pr');?>" style="width:12rem;" class="logo-pr" alt="Logo del proyecto <?php the_title(); ?>"> 
									</div>
									<div class="col-12 link">
									<a href="<?php the_permalink();?>" class="btn btn-light btn-card ps-4 pe-4">Descubrir</a>
									</div>									
								</div>
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
				</div>
			</div>
			<div class="tab-pane fade" id="pills-uru" role="tabpanel" aria-labelledby="pills-uru-tab" tabindex="0">
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
						<div id="id-carousel-item-uru" class="carousel-item <?php echo $post_class ?>">
							<div class="card">
							<div class="img-wrapper" style="filter: brightness(65%);">
									<?php if (get_field('carousel_img')) : ?>
										<img src="<?php the_field('carousel_img')?>"  alt="...">
									<?php else : ?>
										<img src="https://picsum.photos/311/461"  alt="...">
									<?php endif; ?>
								</div>

								<div class="card-body">
								<div class="row">
									<div class="col-12 title mb-4">
										<img src="<?php the_field('logo_pr');?>" style="width:12rem;" class="logo-pr" alt="Logo del proyecto <?php the_title(); ?>"> 
									</div>
									<div class="col-12 link">
									<a href="<?php the_permalink();?>" class="btn btn-light btn-card ps-4 pe-4">Descubrir</a>
									</div>									
								</div>
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
				</div>					
			</div>
		</div>
	</div>

	<div class="container text-center">

		<a href="./proyectos" class="btn btn-secondary btn-card mt-4 mb-4">Ver todos</a>
	</div>
</section>
