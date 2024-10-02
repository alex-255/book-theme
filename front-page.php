<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Book
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="hero__text col-12 col-lg-6 order-2 order-lg-1">
                    <p class="paragraph-with-line">Welcome to Pages</p>
                    <h2 class="hero__title">Books are uniquely portable magic</h2>
                    <p class="hero__subtitle">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form.</p>
                    <div class="hero__links">
                        <a href="#" class="hero__links__order-today">Order Today</a>
                        <a href="#" class="hero__links__read-free-demo">Read Free Demo</a>
                    </div>
                    <ul class="hero__items">
                        <li>Pages:<span>586 pages</span></li>
                        <li>Length:<span>10 Hours</span></li>
                        <li>Ratings:<span>4.5/5 (305 ratings)</span></li>
                    </ul>
                </div>
                <div class="hero__image col-12 col-lg-6 order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri() . '/img/Book.png'; ?>" alt="Book">
                </div>
            </div>
        </div>
    </section>

    <section class="books-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="books__title">Author’s Book Includes</h2>
                </div>
                <div class="books__left col-12 col-lg-6">
                    <div class="row">
                        <div class="books__image col-12 col-md-6"><img
                                src="<?php echo get_template_directory_uri() . '/img/Book-left.png'; ?>" alt="Book"
                                loading="lazy">
                        </div>
                        <div class="books__text col-12 col-md-6">
                            <h3 class="books__text__title">Atomic One’s</h3>
                            <p class="books__text__paragraph">Many variations of passages of Lorem Ipsum willing araise
                                alteration in some form.</p>
                            <ul class="books__text__items">
                                <li><span>Pages:<div class="grey-text">586pages<div></span></li>
                                <li><span>Length:<div class="grey-text">10 Hours<div></span></li>
                            </ul>
                            <a href="#" class="books__text__link-button">Order Today</a>
                        </div>
                    </div>
                </div>
                <div class="books__right col-12 col-lg-6">
                    <div class="row">
                        <div class="books__image col-12 col-md-6"><img
                                src="<?php echo get_template_directory_uri() . '/img/Book-right.png'; ?>" alt="Book"
                                loading="lazy">
                        </div>
                        <div class="books__text col-12 col-md-6">
                            <h3 class="books__text__title">The Dark Light</h3>
                            <p class="books__text__paragraph">Many variations of passages of Lorem Ipsum willing araise
                                alteration in some form.</p>
                            <ul class="books__text__items">
                                <li><span>Pages:<div class="grey-text">586pages<div></span></li>
                                <li><span>Length:<div class="grey-text">10 Hours<div></span></li>
                            </ul>
                            <a href="#" class="books__text__link-button">Order Today</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="about-author-section">
        <div class="container">
            <div class="row">
                <div class="about-author__image col-12 col-lg-6">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() . '/img/Author.jpg'; ?>" alt="Book"
                            loading="lazy">
                        <div class="frame"></div>
                    </div>

                </div>
                <div class="about-author__text col-12 col-lg-6">
                    <h2 class="about-author__text__title">About Author</h2>
                    <p class="about-author__text__paragraph">All the Lorem Ipsum generators on the Internet tend to
                        repeated predefined chunks as necessary, making this the first true value generator on the
                        Internet. It uses a dictionary of over 200 Latin words, combined with a handful.</p>
                    <div class="about-author__text__numbers">
                        <div class="item"><span>02</span><small>Books Published</small></div>
                        <div class="line"></div>
                        <div class="item"><span>4.5</span><small>User Reviews</small></div>
                        <div class="line"></div>
                        <div class="item"><span>04</span><small>Best Seller Awards</small></div>
                    </div>
                    <div class="about-author__text__card">
                        <img src="<?php echo get_template_directory_uri() . '/img/QR-code.png'; ?>" alt="QR-code"
                            loading="lazy">
                        <div class="about-author__text__card__text">
                            <p class="name">John Abraham , Ph.d</p>
                            <p class="paragraph">Mail : johnabraham@gmail.com</p>
                            <p class="paragraph">Phone : (+2) 123 545 9000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trusted-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="trusted__title">Trusted by the Best</h2>
                </div>
                <div class="trusted__slider col-12">
                    <div id="carouselExampleSlidesOnly" class="carousel carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="image-with-text">
                                    <img src="<?php echo get_template_directory_uri() . '/img/Logo3.png'; ?>"
                                        alt="Trusted by">
                                    <h3 class="title">Amazen Corp</h3>
                                    <p class="paragraph">A long established fact that a who looking at its layout.</p>
                                </div>
                                <div class="image-with-text">
                                    <img src="<?php echo get_template_directory_uri() . '/img/Logo4.png'; ?>"
                                        alt="Trusted by">
                                    <h3 class="title">Amazen Corp</h3>
                                    <p class="paragraph">A long established fact that a who looking at its layout.</p>
                                </div>
                                <div class="image-with-text">
                                    <img src="<?php echo get_template_directory_uri() . '/img/Logo1.png'; ?>"
                                        alt="Trusted by">
                                    <h3 class="title">Amazen Corp</h3>
                                    <p class="paragraph">A long established fact that a who looking at its layout.</p>
                                </div>
                                <div class="image-with-text">
                                    <img src="<?php echo get_template_directory_uri() . '/img/Logo2.png'; ?>"
                                        alt="Trusted by">
                                    <h3 class="title">Amazen Corp</h3>
                                    <p class="paragraph">A long established fact that a who looking at its layout.</p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="image-with-text">
                                    <img src="<?php echo get_template_directory_uri() . '/img/Logo1.png'; ?>"
                                        alt="Trusted by">
                                    <h3 class="title">Amazen Corp</h3>
                                    <p class="paragraph">A long established fact that a who looking at its layout.</p>
                                </div>
                                <div class="image-with-text">
                                    <img src="<?php echo get_template_directory_uri() . '/img/Logo2.png'; ?>"
                                        alt="Trusted by">
                                    <h3 class="title">Amazen Corp</h3>
                                    <p class="paragraph">A long established fact that a who looking at its layout.</p>
                                </div>
                                <div class="image-with-text">
                                    <img src="<?php echo get_template_directory_uri() . '/img/Logo4.png'; ?>"
                                        alt="Trusted by">
                                    <h3 class="title">Amazen Corp</h3>
                                    <p class="paragraph">A long established fact that a who looking at its layout.</p>
                                </div>
                                <div class="image-with-text">
                                    <img src="<?php echo get_template_directory_uri() . '/img/Logo3.png'; ?>"
                                        alt="Trusted by">
                                    <h3 class="title">Amazen Corp</h3>
                                    <p class="paragraph">A long established fact that a who looking at its layout.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="get-book-section">
        <div class="container">
            <div class="row">

                <div class="get-book__text col-12 col-lg-6">
                    <h2 class="get-book__text__title">Get Book Copy Today!</h2>
                    <p class="get-book__text__paragraph">This the first true value generator on the Internet. It uses
                        alphas dictionary of over 200 Latin words.</p>
                    <a href="#" class="get-book__text__link-button">Order Today</a>
                </div>
                <div class="get-book__image col-12 col-lg-6">
                    <img src="<?php echo get_template_directory_uri() . '/img/Cup-and-book.png'; ?>" alt="Book"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <section class="learn-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="learn__title">What will you learn?</h2>
                </div>
                <div class="learn__text col-12 col-xl-6">
                    <div class="learn__text__item col-12 col-md-6">
                        <div class="padding-wrapper">
                            <p class="learn__text__number">01</p>
                            <p class="learn__text__paragraph">Use HDFS & Map Reduce for storing & analyzing data at
                                scale.
                            </p>
                        </div>
                    </div>
                    <div class="learn__text__item col-12 col-md-6">
                        <div class="padding-wrapper">
                            <p class="learn__text__number">02</p>
                            <p class="learn__text__paragraph">Consume streaming data using Spark Streaming, Flink, and
                                Storm.</p>
                        </div>
                    </div>
                    <div class="learn__text__item col-12 col-md-6">

                        <div class="padding-wrapper">
                            <p class="learn__text__number">03</p>
                            <p class="learn__text__paragraph">Choose an appropriate data storage technology for your
                                application.</p>
                        </div>
                    </div>
                    <div class="learn__text__item col-12 col-md-6">
                        <div class="padding-wrapper">
                            <p class="learn__text__number">04</p>
                            <p class="learn__text__paragraph">Analyze non-relational data using HBase, Cassandra, and
                                MongoDB.</p>
                        </div>
                    </div>

                </div>
                <div class="learn__image col-12 col-xl-6">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() . '/img/Girl-reading.jpg'; ?>" alt="Book"
                            loading="lazy">
                        <div class="frame"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="posts-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="posts__title">Articles & Resources</h2>
                </div>
                <div class="row">
                    <?php
    // the query.
    $the_query = new WP_Query( array(
        "posts_per_page" => 3
    ) ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		?>
                    <div class="posts__text col-12 col-xl-4">
                        <img class="posts__text__image" <?php 
                            echo "srcset=\"";
                            echo get_the_post_thumbnail_url( get_the_ID(), "thumbnail" ) . " 150w, ";
                            echo get_the_post_thumbnail_url( get_the_ID(), "medium" ) . " 300w, ";
                            echo get_the_post_thumbnail_url( get_the_ID(), "medium_large" ) . " 768w, ";
                            echo get_the_post_thumbnail_url( get_the_ID(), "large" ) . " 1024w, ";
                            echo get_the_post_thumbnail_url( get_the_ID(), "1536x1536" ) . " 1536w, ";
                            echo get_the_post_thumbnail_url( get_the_ID(), "2048x2048" ) . " 2048w, ";
                            echo "\"";
                            echo "sizes=\"";
                            echo "(max-width:150px) 150px, (max-width:300px) 300px, (max-width:768px) 768px, (max-width:1024px) 1024px, (min-width:1200px) 768px, 2048px";
                            echo "\"";
                            ?> src="<?php echo get_the_post_thumbnail_url( get_the_ID(), "full" ); ?>"
                            alt="<?php echo get_the_title(); ?>" loading="lazy" />
                        <div class="posts__text__text">
                            <?php the_title( '<h2 class="posts__text__text__title">', '</h2>' ); ?>
                            <p class="posts__text__text__paragraph">
                                <?php echo wp_trim_words( get_the_content( null, false, $the_query->get_the_ID() ), 20, null ); ?>
                            </p>
                            <div class="posts__text__text__links">
                                <a class="posts__text__text__links__read-more" href="<?php the_permalink() ?>">Read
                                    more<span><?php echo " about " . get_the_title(); ?></span></a>
                                <span class="posts__text__text__links__right">
                                    <?php // the_author_link(); 
                                    book_theme_posted_by();?>
                                    <?php echo " - " . get_the_date( "j.n.Y", get_the_ID() ); ?>
                                </span>
                            </div>
                        </div>


                    </div>

                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();