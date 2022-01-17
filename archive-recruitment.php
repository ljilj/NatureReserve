<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package NatureReserve
 */

get_header(); ?>

<?php
get_template_part( '/template-parts/component/page_header' );
?>

<section class="recruitment">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area">

                <?php  ?>

                <?php
                if( ICL_LANGUAGE_CODE == 'en' ) : ?>

                        <?php

                        echo do_shortcode( '[searchandfilter id="504"]' );

                        ?>

                <?php elseif( ICL_LANGUAGE_CODE=='ar' ) : ?>

                        <?php

                        echo do_shortcode( '[searchandfilter id="512"]' );

                        ?>

                <?php endif; ?>

                <main id="main" class="site-main" role="main">

                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <?php

                            /*
                            * Include the Post-Format-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                            */
                            get_template_part('template-parts/content', get_post_type());
                            ?>

                        <?php endwhile; ?>

                        <?php NatureReserve_post_navigation(); ?>

                    <?php else : ?>

                        <?php get_template_part('template-parts/content', 'none'); ?>

                    <?php endif; ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<?php get_footer(); ?>
