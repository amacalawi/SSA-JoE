<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package ascent
 */

if ( ! function_exists( 'ascent_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function ascent_content_nav( $nav_id ) {
    global $wp_query, $post;

    // Don't print empty markup on single pages if there's nowhere to navigate.
    if ( is_single() ) {
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
	    return;
    }

    // Don't print empty markup in archives if there's only one page.
    if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
	return;

    $nav_class = ( is_single() ) ? 'post-navigation' : 'paging-navigation';

    ?>
    <nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">
	<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'ascent' ); ?></h1>
	<ul class="pager">

	<?php if ( is_single() ) : // navigation links for single posts ?>

	    <?php previous_post_link( '<li class="nav-previous previous">%link</li>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'ascent' ) . '</span> %title' ); ?>
	    <?php next_post_link( '<li class="nav-next next">%link</li>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'ascent' ) . '</span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

	    <?php if ( get_next_posts_link() ) : ?>
	    <li class="nav-previous previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'ascent' ) ); ?></li>
	    <?php endif; ?>

	    <?php if ( get_previous_posts_link() ) : ?>
	    <li class="nav-next next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'ascent' ) ); ?></li>
	    <?php endif; ?>
	<?php endif; ?>
	</ul>
    </nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
    <?php
}
endif; // ascent_content_nav

if ( ! function_exists( 'ascent_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function ascent_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'media' ); ?>>
	<div class="comment-body">
	    <?php _e( 'Pingback:', 'ascent' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'ascent' ), '<span class="edit-link">', '</span>' ); ?>
	</div>

    <?php else : ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
	<article id="div-comment-<?php comment_ID(); ?>" class="comment-body media">
	    <a class="pull-left" href="#">
		<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	    </a>
	    
	    <div class="media-body">
		<div class="media-body-wrap">
		    <div class="comment-heading">
			<h5 class="media-heading"><?php printf( __( '%s ', 'ascent' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></h5>
			<div class="comment-meta">
			    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
				<time class="updated" datetime="<?php comment_time( 'c' ); ?>">
				    <?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'ascent' ), get_comment_date(), get_comment_time() ); ?>
				</time>
			    </a> 
			    <?php edit_comment_link( __( '<span style="margin-left: 5px;" class="glyphicon glyphicon-edit"></span> Edit', 'ascent' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
		    </div>

		    <?php if ( '0' == $comment->comment_approved ) : ?>
			<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'ascent' ); ?></p>
		    <?php endif; ?>
		    
		    <div class="comment-content">
			<?php comment_text(); ?>
		    </div><!-- .comment-content -->

		    <?php comment_reply_link(
			array_merge(
			    $args, array(
				'add_below' => 'div-comment',
				'depth' 	=> $depth,
				'max_depth' => $args['max_depth'],
				'before' 	=> '<div class="reply comment-reply">',
				'after' 	=> '</div><!-- .reply -->'
			    )
			)
		    ); ?>
		</div>
	    </div><!-- .media-body -->
	</article><!-- .comment-body -->
    <?php
    endif;
}
endif; // ends check for ascent_comment()

if ( ! function_exists( 'ascent_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function ascent_the_attached_image() {
    $post                = get_post();
    $attachment_size     = apply_filters( 'ascent_attachment_size', array( 1200, 1200 ) );
    $next_attachment_url = wp_get_attachment_url();

    /**
     * Grab the IDs of all the image attachments in a gallery so we can get the
     * URL of the next adjacent image in a gallery, or the first image (if
     * we're looking at the last image in a gallery), or, in a gallery of one,
     * just the link to that image file.
     */
    $attachment_ids = get_posts( array(
	'post_parent'    => $post->post_parent,
	'fields'         => 'ids',
	'numberposts'    => -1,
	'post_status'    => 'inherit',
	'post_type'      => 'attachment',
	'post_mime_type' => 'image',
	'order'          => 'ASC',
	'orderby'        => 'menu_order ID'
    ) );

    // If there is more than 1 attachment in a gallery...
    if ( count( $attachment_ids ) > 1 ) {
	foreach ( $attachment_ids as $attachment_id ) {
	    if ( $attachment_id == $post->ID ) {
		$next_id = current( $attachment_ids );
		break;
	    }
	}

	// get the URL of the next image attachment...
	if ( $next_id )
	    $next_attachment_url = get_attachment_link( $next_id );

	// or get the URL of the first image attachment.
	else
	    $next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
    }

    printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
	esc_url( $next_attachment_url ),
	the_title_attribute( array( 'echo' => false ) ),
	wp_get_attachment_image( $post->ID, $attachment_size )
    );
}
endif;

if ( ! function_exists( 'ascent_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function ascent_posted_on() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    
    $time_string = sprintf( $time_string,
	esc_attr( get_the_date( 'c' ) ),
	esc_html( get_the_date('M j, Y') )
    );
    
    $time_string = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
	esc_url( get_permalink() ),
	esc_attr( get_the_time() ),
	$time_string
    );
    
    printf( __( '<span class="posted-on">%1$s</span> <br><span class="byline">%2$s</span>', 'ascent' ),
	$time_string,
	sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
	    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
	    esc_attr( sprintf( __( 'View all posts by %s', 'ascent' ), get_the_author() ) ),
	    get_avatar( get_the_author_meta( 'ID' ), 32)
	)
    );
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function ascent_categorized_blog() {
    if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
	// Create an array of all the categories that are attached to posts
	$all_the_cool_cats = get_categories( array(
	    'hide_empty' => 1,
	) );

	// Count the number of categories that are attached to the posts
	$all_the_cool_cats = count( $all_the_cool_cats );

	set_transient( 'all_the_cool_cats', $all_the_cool_cats );
    }

    if ( '1' != $all_the_cool_cats ) {
	// This blog has more than 1 category so ascent_categorized_blog should return true
	return true;
    } else {
	// This blog has only 1 category so ascent_categorized_blog should return false
	return false;
    }
}

/**
 * Flush out the transients used in ascent_categorized_blog
 */
function ascent_category_transient_flusher() {
    // Like, beat it. Dig?
    delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'ascent_category_transient_flusher' );
add_action( 'save_post',     'ascent_category_transient_flusher' );
