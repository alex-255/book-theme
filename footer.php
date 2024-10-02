<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Book
 */

?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-3">
                <div class="site-branding">
                    <div class="logo-and-title">
                        <?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
						else :
							?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
						endif;
						$book_theme_description = get_bloginfo( 'description', 'display' );
						if ( $book_theme_description || is_customize_preview() ) :
							?>
                        <p class="site-description">
                            <?php echo $book_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </p>
                        <?php endif; ?>
                    </div>

                    <div class="social-icons">
                        <a href="#"><span class="dashicons dashicons-facebook-alt"></span></a>
                        <a href="#"><span class="dashicons dashicons-twitter"></span></a>
                        <a href="#"><span class="dashicons dashicons-linkedin"></span></a>
                        <a href="#"><span class="dashicons dashicons-instagram"></span></a>
                    </div>
                </div><!-- .site-branding -->
            </div>
            <div class="col-12 col-xl-3">
                <h3 class="footer-menu__title">Explore</h3>
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-1',
							'menu_class' => 'footer-menu'
						)
					);
				?>
            </div>
            <div class="col-12 col-xl-3">
                <h3 class="footer-menu__title">Utility Pages</h3>
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-2',
							'menu_class' => 'footer-menu'
						)
					);
				?>
            </div>
            <div class="col-12 col-xl-3">
                <h3 class="footer-menu__title">Keep in Touch</h3>
                <p class="info">
                    <span class="label">Address:</span>24A Kingston St, Los Vegas NC 28202, USA.
                </p>
                <p class="info">
                    <span class="label">Mail:</span><a
                        href="mailto:support@developmentweb.online">support@developmentweb.online</a>
                </p>
                <p class="info">
                    <span class="label">Phone:</span><a href="tel:+221234567900">(+22) 123 - 4567 - 900</a>
                </p>
            </div>
            <div class="col-12">
                <div class="site-copyright">

                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'book_theme' ) ); ?>">
                        <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'book_theme' ), 'WordPress' );
				?>
                    </a>
                    <span class="sep"> | </span>
                    <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'book_theme' ), 'book_theme', '<a href="http://developmentweb.online/">Alex Curious</a>' );
				?>
                </div><!-- .site-info -->
            </div>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>