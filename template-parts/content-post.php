<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Book
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="container">
            <?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			?>
        </div>


    </header><!-- .entry-header -->
    <div class="container">
        <?php book_theme_post_thumbnail(); ?>

        <div class="entry-content">
            <div class="entry-meta">
                <?php
				book_theme_posted_on();
				book_theme_posted_by();
				?> / <?php 
				if ( 'post' === get_post_type() ) {
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( esc_html__( ', ', 'book_theme' ) );
					if ( $categories_list ) {
						/* translators: 1: list of categories. */
						printf( '<span class="cat-links">%1$s</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					}
				}
				
				?>
            </div><!-- .entry-meta -->
            <div class="entry-content__content">
                <?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'book_theme' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'book_theme' ),
							'after'  => '</div>',
						)
					);
				?>
            </div>

        </div><!-- .entry-content -->
    </div>


    <footer class="entry-footer">
        <?php // book_theme_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->