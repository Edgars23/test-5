<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<div class="footer-info">
					<div class="info-section-desktop">
						<p class="contact-tel">Call Us - <a href="tel:0987654321">0987654321</a></p>
						<p class="contact-email">Email: <a href="mailto:testdomain@mail.to">testdomain@mail.to</a></p>
					</div>
					<div class="info-section-mobile">
						<p class="contact-tel"><a href="tel:0987654321">Call Us</a></p>
						<p class="contact-email"><a href="mailto:testdomain@mail.to">Email Us</a></p>
					</div>
					<div class="contact-btn">
						<a href="#">Contact Us</a>
					</div>
					<div class="popup-section">
						<div class="popup-content">
							<div class="close-x"><a href="#">X</a></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id convallis enim. Suspendisse quis lectus sed lacus pretium dictum. Nullam viverra turpis felis, a condimentum nulla bibendum at. Ut eleifend quis urna at imperdiet. Vivamus cursus nisi ut arcu eleifend tempus. Praesent convallis tellus ut dictum auctor. Phasellus vel euismod urna, id cursus est.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id convallis enim. Suspendisse quis lectus sed lacus pretium dictum. Nullam viverra turpis felis, a condimentum nulla bibendum at. Ut eleifend quis urna at imperdiet. Vivamus cursus nisi ut arcu eleifend tempus. Praesent convallis tellus ut dictum auctor. Phasellus vel euismod urna, id cursus est.</p>
						</div>
					</div>
				</div>
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;


				get_template_part( 'template-parts/footer/site', 'info' );

				?>

			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
