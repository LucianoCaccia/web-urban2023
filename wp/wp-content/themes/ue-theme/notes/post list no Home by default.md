# post list no Home by default
### Imprime el title y el post default de la page

<div id="post-<?php the_ID(); ?>" <?php post_class( 'content container' ); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php
		the_content();
		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'ue-theme' ) . '">',
				'after'    => '</nav>',
				'pagelink' => esc_html__( 'Page %', 'ue-theme' ),
			)
		);
		edit_post_link(
			esc_attr__( 'Edit', 'ue-theme' ),
			'<span class="edit-link">',
			'</span>'
		);
	?>
</div><!-- /#post-<?php the_ID(); ?> -->


