# proyectos slider en homepage

```html
	<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
		<div class="carousel-inner">
		<!-- Projectos Loop -->
		<?php if ( $the_query->have_posts() ) : ?>
    	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<!-- <a href="<?php // the_permalink();?>">	<h2><?php // the_title(); ?></h2> </a> -->
			<!-- <p><?php // the_content(); ?></p> -->
			<!-- <?php $id = get_the_ID() ?> -->
			<!-- <span class="badge text-bg-success"><?php // the_field('amenities'); ?> </span> -->
			<!-- <span class="badge text-bg-warning"><?php // the_field('avance'); ?></span> -->
			<?php $post_n = $post_n + 1?>
			<?php ($post_n == 1) ? $post_class = "active" : $post_class = "" ?>
			<div class="carousel-item <?php echo $post_class ?>">
				<div class="card">
					<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5><span><?php echo $post_n?></span> <span><?php the_field('pais'); ?></span>
						<a href="<?php the_permalink();?>" class="btn btn-primary">Go <?php the_title(); ?></a>
					</div>
				</div>
			</div>
    	<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
```

```html
			<div class="carousel-item <?php echo $post_class ?>">
				<div class="card">
					<div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5><span><?php echo $post_n?></span> <span><?php echo $pais;?></span>
						<a href="<?php the_permalink();?>" class="btn btn-primary">Go <?php the_title(); ?></a>
					</div>
				</div>
			</div>
```
