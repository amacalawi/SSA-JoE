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


/*
| ------------------------------------
| # HEADER
| ------------------------------------
| Get the header template (header.php)
*/
get_header();


// Start the loop.
if( have_posts() ):
    while ( have_posts() ) : the_post();

        global $post;

        if( is_front_page() ) {

            get_template_part("home");

        } else {

            get_template_part( $post->post_name );

        }

    endwhile;
else :
    get_template_part( 'content', 'none' );
endif;


/*
| ------------------------------------
| # FOOTER
| ------------------------------------
| Get the footer template (footer.php)
*/
get_footer();

?>