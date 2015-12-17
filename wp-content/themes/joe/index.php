<?php
/**
 * JoE's Theme
 *
 * blankET
 * The main template file.
 *
 * One Loop to rule them all,
 * One Loop to find them,
 * One Loop to bring them all and in the darkness bind them.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package blankET
 * @subpackage JoE
 * @since JoE 1.0
 */

get_header(); ?>

    <div class="content">

        <?php if ( have_posts() ) :
            ## Start the loop.
            while ( have_posts() ) : the_post();

                if( is_front_page() ) {

                    get_template_part('views/templates/front', 'page');

                } else {

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'views/templates/partials/content', 'page' );

                }


            // End the loop.
            endwhile;

        ## If no content, include the "No posts found" template.
        else :
            get_template_part( 'views/templates/partials/content', 'none' );

        endif; ?>


    </div> <?php

get_footer(); ?>