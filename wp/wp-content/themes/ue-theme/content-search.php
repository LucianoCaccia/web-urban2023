<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'search col-sm-12' ); ?>>
	<div class="card mb-4 search">
		<header class="card-body row">
            <div class="col-sm-3">
                <a href="<?php the_permalink(); ?>">
                    <?php 
                    if ( has_post_thumbnail() ) {
                        echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'medium' ) . '</div>';
                    }
                    ?>
                </a>
            </div>
            <div class="col-sm-7">
                <h2 class="card-title">
                    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'ue-theme' ), the_title_attribute( array( 'echo' => false ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h2>
                <div class="card-text entry-content">
				<?php
                    if ( is_search() ) {
                        the_excerpt();
                    } else {
                        the_content();
                    }
				?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'ue-theme' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- /.card-text -->

            </div>
		</header>
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->
