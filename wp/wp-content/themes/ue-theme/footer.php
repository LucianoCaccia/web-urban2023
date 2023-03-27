			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				// Adding the second left column links
				// if ( is_single() || is_archive() ) :
			?>
					<!-- </div>/.col -->

					<?php
						// get_sidebar();
					?>

				<!-- </div>/.row -->
			<?php
				// endif;
			?>
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row pb-4">
					<div class=" col-md-2 col-sm-6">
						<img class="footer-logo" src="/wp-content/themes/ue-theme/img/URBAN-ESTATE-LOGO.svg" alt="Urban Estate Logo" />
						<div class="social-footer col-md-9 col-4">
							<a href="http://www.facebook.com/urbanestatelive" target="_blank" style="color:#ffffff;"><span><i class="bi bi-facebook" style="font-size: 1rem;"></i></span></a>
							<a href="http://www.instagram.com/urbanestatelive" target="_blank" style="color:#ffffff;"><span><i class="bi bi-instagram" style="font-size: 1rem;"></i></span></a>
							<a href="https://www.youtube.com/@urbanestate4035" target="_blank" style="color:#ffffff;"><span><i class="bi bi-youtube" style="font-size: 1rem;"></i></span></a>
							<a href="https://www.linkedin.com/company/urban-estate-live/" target="_blank" style="color:#ffffff;"><span><i class="bi bi-linkedin" style="font-size: 1rem;"></i></span></a>
						</div>
						
					</div>
					<div class="col-md-5 mt-md-5 col-sm-6 mt-3 d-flex justify-content-center">
						<small>ARGENTINA: (+5411) 5258·8788 - URUGUAY: (+598) 2927·2347<br>
						<span><i class="bi bi-envelope mt-2" style="font-size: 1rem;"></i><a href="mailto:contacto@urbanestate.com.ar" style="color:#ffffff;"> contacto@urbanestate.com.ar</a></span>
						</small>
					</div>					

					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'container'       => 'nav',
									'container_class' => 'col-md-5 mt-5',
									//'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
									'theme_location'  => 'footer-menu',
									'items_wrap'      => '<ul class="menu nav justify-content-center">%3$s</ul>',
								),
							);
						endif;

						if ( is_active_sidebar( 'third_widget_area' ) ) :
					?>
						<div class="col-md-12">
							<?php
								dynamic_sidebar( 'third_widget_area' );

								if ( current_user_can( 'manage_options' ) ) :
							?>
								<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge bg-secondary"><?php esc_html_e( 'Edit', 'ue-theme' ); ?></a></span><!-- Show Edit Widget link -->
							<?php
								endif;
							?>
						</div>
					<?php
						endif;
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
