<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<div class="container">
	<section id="breadcrumbs">
		<div class="container">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );} ?>
		</div>
	</section>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title mt-5"><?php the_title(); ?></h1>
				<?php
					if ( 'post' === get_post_type() ) :
				?>
				<?php
					endif;
				?>
			</header><!-- /.entry-header -->
			<div class="entry-content clearfix mt-5 mb-5">
				<?php
					if ( has_post_thumbnail() ) :
						echo '<div class="col-md-6 float-md-end mb-3 ms-md-3">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
					endif;

					the_content();
					//echo '<div class="entry-meta">' . ue_theme_article_posted_on() . '</div>';
					echo '<div class="entry-meta"> <a href="/prensa">Ver más notas >></a>';
					wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'ue-theme' ) . '</span>', 'after' => '</div>' ) );
				?>
			</div><!-- /.entry-content -->

			<?php
				edit_post_link( __( 'Edit', 'ue-theme' ), '<span class="edit-link">', '</span>' );
			?>

			<footer class="entry-meta">
				
				<?php
					/* translators: used between list items, there is a space after the comma */
					$category_list = get_the_category_list( __( ', ', 'ue-theme' ) );

					/* translators: used between list items, there is a space after the comma */
					$tag_list = get_the_tag_list( '', __( ', ', 'ue-theme' ) );
					if ( '' != $tag_list ) :
						$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'ue-theme' );
					elseif ( '' != $category_list ) :
						$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'ue-theme' );
					else :
						$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'ue-theme' );
					endif;

					// printf(
					// 	$utility_text,
					// 	$category_list,
					// 	$tag_list,
					// 	esc_url( get_the_permalink() ),
					// 	the_title_attribute( array( 'echo' => false ) ),
					// 	get_the_author(),
					// 	esc_url( get_author_posts_url( (int) get_the_author_meta( 'ID' ) ) )
					// );
				?>
				
				<?php
					get_template_part( 'author', 'bio' );
				?>
			</footer><!-- /.entry-meta -->
		</article><!-- /#post-<?php the_ID(); ?> -->

</div>