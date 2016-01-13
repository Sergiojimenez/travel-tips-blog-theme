<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area" class="site-footer-heading">
		<div class="container">
			<div class="row col-sm-9">
				<p class="">Japan Rail Pass</p>
				<ul class="col-sm-4">
					<li>
						ORDER YOUR JR PASS
					</li>
					<li>
						PASES REGIONALES
					</li>
					<li>
						CONDICIONES TARIFARIAS Y PLAZOS
					</li>
					<li>
						PAGO SEGURO
					</li>
					<li>
						JAPÓN EN TREN
					</li>
				</ul>
				<ul class="col-sm-4">
					<li>
						QUIÉNES SOMOS
					</li>
					<li>
						JAPAN EXPERIENCE
					</li>
					<li>
						TESTIMONIOS
					</li>
				</ul>
				<ul class="col-sm-4">
					<li>
						ola k ase
					</li>
					<li>
						ola k ase
					</li>
					<li>
						ola k ase
					</li>
				</ul>
			</div>
				<?php
				/**
				 * The Sidebar widget area for footer.
				 *
				 * @package sparkling
				 */
				?>

				<?php
				// If footer sidebars do not have widget let's bail.

				if ( ! is_active_sidebar( 'footer-widget-1' ) && ! is_active_sidebar( 'footer-widget-2' ) && ! is_active_sidebar( 'footer-widget-3' ) )
					return;
				// If we made it this far we must have widgets.
				?>

				<div class="footer-widget-area col-sm-3">
					<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
						<div class=" footer-widget" role="complementary">
							<?php dynamic_sidebar( 'footer-widget-1' ); ?>
						</div><!-- .widget-area .first -->
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
						<div class="footer-widget" role="complementary">
							<?php dynamic_sidebar( 'footer-widget-2' ); ?>
						</div><!-- .widget-area .second -->
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
						<div class="footer-widget" role="complementary">
							<?php dynamic_sidebar( 'footer-widget-3' ); ?>
						</div><!-- .widget-area .third -->
					<?php endif; ?>
				</div>
		</div>


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
<!--					--><?php /*if( of_get_option('footer_social') ) sparkling_social_icons(); */?>
					<nav role="navigation" class="col-md-6">
						<?php sparkling_footer_links(); ?>
					</nav>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>