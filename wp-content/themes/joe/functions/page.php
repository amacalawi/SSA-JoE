<?php
/*
| --------------------------------------
| # Page
| --------------------------------------
|
*/

# Thumbnail support
add_theme_support("post-thumbnails");


# Meta tags
add_action( 'wp_head', 'blanket_meta_tags');
function blanket_meta_tags() { ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><?php

    if( is_single() ) {
        global $post; ?>
        <meta name="author" content="<?php echo get_the_author_meta('display_name', $post->post_author) ?>"><?php
    } else { ?>
        <meta name="author" content="<?php echo BLANKET_GET_AUTHOR ?>"><?php
    } ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php
}

# Title tag
add_action( 'wp_head', 'blanket_title_tag' );
function blanket_title_tag() { ?>
    <title><?php
        global $page, $paged;

        wp_title( '|', true, 'right' );

        # Add the blog name.
        bloginfo( 'name' );

        # Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        # Add a page number if necessary:
        if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
            echo ' | ' . sprintf( __( 'Page %s', 'blanket' ), max( $paged, $page ) ); ?>
    </title><?php

}

# Favicons
add_action( 'login_head', 'add_favicon' );  # login screen
add_action( 'wp_head', 'add_favicon' );     # front end
add_action( 'admin_head', 'add_favicon' );  # admin end
function add_favicon() { ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url(home_url()); ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url(home_url()); ?>/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(home_url()); ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(home_url()); ?>/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="<?php echo esc_url(home_url()); ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo esc_url(home_url()); ?>/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo esc_url(home_url()); ?>/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo esc_url(home_url()); ?>/manifest.json">
    <link rel="mask-icon" href="<?php echo esc_url(home_url()); ?>/safari-pinned-tab.svg" color="#fdbe3d">
    <meta name="msapplication-TileColor" content="#fdbe3d">
    <meta name="theme-color" content="#fdbe3d">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--><?php
}

# Menus | Default menus
add_action( 'init', 'blanket_menus' );
function blanket_menus() {
    # Main Menu
    register_nav_menu('main-menu', __( 'Main Menu' ));
    # Main Menu
    register_nav_menu('main-menu-link', __( 'Main Menu Link' ));
    # Language Menu
    register_nav_menu('footer-menu', __( 'Footer Menu' ));
    # Social Menu
    // register_nav_menu('social-media-menu', __( 'Social Media Menu' ));
}

/*
| ------------------------------------------
| # Theme Custom Helpers
| ------------------------------------------
*/


function get_site_logo()
{
    return BLANKET_ASSETS_URI . 'logos/main.png';
}

function get_next_button($href="#")
{
    include BLANKET_VIEWS . 'partials/next-button.php';
}

function get_modal($id="themodal_id")
{
    $blanket_modal_options = get_option( BlanketOptionsController::$menu_settings );
    $blanket_modal_options = $blanket_modal_options['modal'];
    if( array_key_exists('use', $blanket_modal_options) && $blanket_modal_options['use'] )
        include BLANKET_VIEWS . 'partials/modal.php';
}

function get_author_fullname($post_author=null)
{
    $post_author = $post_author==null ? '' : $post_author;
    $fname = get_the_author_meta('first_name', $post_author);
    $lname = get_the_author_meta('last_name', $post_author);
    $full_name = '';
    if( empty($fname)){
        $full_name = $lname;
    } elseif( empty( $lname )){
        $full_name = $fname;
    } else {
        //both first name and last name are present
        $full_name = "{$fname} {$lname}";
    }

    return $full_name;
}

function get_search_excerpt_highlight() {
    $content = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $content = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $content);

    echo '<p>' . $content . '</p>';
}

function get_most_viewed_post($num=5)
{
    return query_posts(['posts_per_page' => $num, 'orderby' => 'comment_count', 'order' => 'DESC',]);
}

function get_the_categories($id=null)
{
    if(null==$id) $id = get_the_ID();

    $cats = wp_get_post_categories();

    $cats = [];
    foreach ($cats as $cat) {
        $cats[] = $cat->name;
    }

    return implode(", ", $cats);
}

function get_pagination_bar($q) {

    $total_pages = $q->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        $return =  paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'type'=>'list'
        ));
        return str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
    }
}


/**
 * Checks the post_map
 * @return boolean
 */
function has_post_map()
{
    global $post;
    $blanket_contact = get_post_meta($post->ID, 'blanket_contact', true);
    return (null != $blanket_contact['map']) ? true : false;
}

/**
 * Displays the post_map
 * @param  boolean $thumbnail_fallback Displays the post_thumbnail if map is empty
 * @return html
 */
function the_post_map($thumbnail_fallback=true) {
    ob_start();
    global $post;

    $blanket_contact = get_post_meta($post->ID, 'blanket_contact', true);
    if($thumbnail_fallback)
    {
        $blanket_contact = $blanket_contact ? get_post_meta($post->ID, 'blanket_contact', true) : get_the_post_thumbnail();
    }

    if (null == $blanket_contact['map']) return;

    echo $blanket_contact['map'];
    echo ob_get_clean();
}

/**
 * Checks for blanket_contact
 * @return boolean
 */
function has_contact_info()
{
    global $post;
    return (null != get_post_meta($post->ID, 'blanket_contact', true)) ? true : false;
}

function the_contact_info($id=null)
{
    ob_start();
    if( has_contact_info() )
    {
        global $post, $post_id;
        if( null == $id ) $id = $post->ID;

        $blanket_contact = get_post_meta( $id, "blanket_contact", true ); ?>
        <h4 itemscope itemtype="http://schema.org/Organization">
            <div itemprop="name"><strong><?php echo value($blanket_contact['company']); ?></strong></div>
            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <div itemprop="streetAddress">
                    <span class="unit"><?php echo value($blanket_contact['unit'], "", ", "); ?></span>
                    <span class="street"><?php echo value($blanket_contact['street'], "", ", "); ?></span>
                </div>
                <div itemprop="addressLocality">
                    <span class="brgy"><?php echo value($blanket_contact['brgy'], "", ", "); ?></span>
                    <span class="city"><?php echo value($blanket_contact['city'], "", ", "); ?></span>
                </div>
                <div itemprop="addressRegion">
                    <span class="province"><?php echo value($blanket_contact['province'], "", ", "); ?></span>
                </div>
                <div itemprop="postalCode">
                    <span class="zip"><?php echo value($blanket_contact['zip'], "", ", "); ?></span>
                </div>
                <div itemprop="addressCountry">
                    <span class="country"><?php echo value($blanket_contact['country']); ?></span>
                </div>
            </div>
        </h4><?php
    }

    echo ob_get_clean();

}

function the_carousel($id=null) {
    ob_start();
    global $post, $post_id;
    if( null === $id ) $id = get_the_ID();

    $carousels = get_post_meta( $id, 'blanket_bootstrap_carousel', true);
    include BLANKET_VIEWS . "pages/carousel.view.php";
    echo ob_get_clean();
}

/*
| -----------
| # Copyright
| -----------
*/
function the_copyright() {
    $dateNow = "2015"; ?>
    <span class="sitename">&copy; <?php echo $dateNow; ?> <?php if(date('Y') !== $dateNow){ echo "- " . date('Y');} ?> <?php bloginfo( 'name' ); ?></span> <?php _e('via SSA Consulting Group Pte. Ltd', 'blanket'); ?>.<?php
}
/*
| ---------------------
| # All Rights Reserved
| ---------------------
*/
function all_rights_reserved() {
    _e('All Rights Reserved', 'blanket');
}



# Manage Every Column's values
add_filter( 'manage_edit-page_columns', function($columns){
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'blanket_title' => __( 'Title' ),
        'date' => 'Date'
    );
    return $columns;
});

add_action( 'manage_pages_custom_column', function($column, $post_id){
    global $post;
    switch( $column ) :

        case 'blanket_title' :

            // variables
            $post               = get_post( $post_id );
            $title              = _draft_or_post_title();
            $post_type_object   = get_post_type_object( $post->post_type );
            $can_edit_post      = current_user_can( 'edit_post', $post->ID );

            // set up row actions
            $actions = array();
            if ( $can_edit_post && $post->post_status != 'trash' ) {
                $edit_link = get_edit_post_link( $post->ID );
                echo '<a class="row-title" href="' . $edit_link . '" title="' . sprintf( __( 'Edit &#8220;%s&#8221;' ), $title ) . '">' . html_entity_decode($title) . '</a>';
            } else {
                echo html_entity_decode($title);
            }
            if ( $can_edit_post && 'trash' != $post->post_status ) {
                $actions['edit'] = '<a href="' . get_edit_post_link( $post->ID, true ) . '" title="' . esc_attr( __( 'Edit this item' ) ) . '">' . __( 'Edit' ) . '</a>';
                $actions['inline hide-if-no-js'] = '<a href="#" class="editinline" title="' . esc_attr( __( 'Edit this item inline' ) ) . '">' . __( 'Quick&nbsp;Edit' ) . '</a>';
            }
            if ( current_user_can( 'delete_post', $post->ID ) ) {
                if ( 'trash' == $post->post_status )
                    $actions['untrash'] = "<a title='" . esc_attr( __( 'Restore this item from the Trash' ) ) . "' href='" . wp_nonce_url( admin_url( sprintf( $post_type_object->_edit_link . '&amp;action=untrash', $post->ID ) ), 'untrash-post_' . $post->ID ) . "'>" . __( 'Restore' ) . "</a>";
                elseif ( EMPTY_TRASH_DAYS )
                    $actions['trash'] = "<a class='submitdelete' title='" . esc_attr( __( 'Move this item to the Trash' ) ) . "' href='" . get_delete_post_link( $post->ID ) . "'>" . __( 'Trash' ) . "</a>";
                if ( 'trash' == $post->post_status || !EMPTY_TRASH_DAYS )
                    $actions['delete'] = "<a class='submitdelete' title='" . esc_attr( __( 'Delete this item permanently' ) ) . "' href='" . get_delete_post_link( $post->ID, '', true ) . "'>" . __( 'Delete Permanently' ) . "</a>";
            }
            if ( $post_type_object->public ) {
                if ( in_array( $post->post_status, array( 'pending', 'draft', 'future' ) ) ) {
                    if ( $can_edit_post ) {
                        $preview_link = set_url_scheme( get_permalink( $post->ID ) );
                        /** This filter is documented in wp-admin/includes/meta-boxes.php */
                        $preview_link = apply_filters( 'preview_post_link', add_query_arg( 'preview', 'true', $preview_link ), $post );
                        $actions['view'] = '<a href="' . esc_url( $preview_link ) . '" title="' . esc_attr( sprintf( __( 'Preview &#8220;%s&#8221;' ), $title ) ) . '" rel="permalink">' . __( 'Preview' ) . '</a>';
                    }
                } elseif ( 'trash' != $post->post_status ) {
                    $actions['view'] = '<a href="' . get_permalink( $post->ID ) . '" title="' . esc_attr( sprintf( __( 'View &#8220;%s&#8221;' ), $title ) ) . '" rel="permalink">' . __( 'View' ) . '</a>';
                }
            }

            // invoke row actions
            $table = new WP_Posts_List_Table;
            echo $table->row_actions( $actions, true );

            break;

    endswitch;
}, 10, 2 );


/*
| -------
| # Query
| -------
*/
add_filter( 'posts_search', 'db_filter_authors_search' );
function db_filter_authors_search( $posts_search ) {
    // Don't modify the query at all if we're not on the search template
    // or if the LIKE is empty
    if ( !is_search() || empty( $posts_search ) )
        return $posts_search;
    global $wpdb;
    // Get all of the users of the blog and see if the search query matches either
    // the display name or the user login
    add_filter( 'pre_user_query', 'db_filter_user_query' );
    $search = sanitize_text_field( get_query_var( 's' ) );
    $args = array(
        'count_total' => false,
        'search' => sprintf( '*%s*', $search ),
        'search_fields' => array(
            'display_name',
            'user_login',
        ),
        'fields' => 'ID',
    );
    $matching_users = get_users( $args );
    remove_filter( 'pre_user_query', 'db_filter_user_query' );
    // Don't modify the query if there aren't any matching users
    if ( empty( $matching_users ) )
        return $posts_search;
    // Take a slightly different approach than core where we want all of the posts from these authors
    $posts_search = str_replace( ')))', ")) OR ( {$wpdb->posts}.post_author IN (" . implode( ',', array_map( 'absint', $matching_users ) ) . ")))", $posts_search );
    return $posts_search;
}
/**
 * Modify get_users() to search display_name instead of user_nicename
 */
function db_filter_user_query( &$user_query ) {
    if ( is_object( $user_query ) )
        $user_query->query_where = str_replace( "user_nicename LIKE", "display_name LIKE", $user_query->query_where );
    return $user_query;
}

# Add Manage Category Capability to the Author Role
function blanket_add_manage_cat_to_author_role()
{
    if ( ! current_user_can( 'author' ) )
        return;

    // here you should check if the role already has_cap already and if so, abort/return;

    if ( current_user_can( 'author' ) )
    {
        $GLOBALS['wp_roles']->add_cap( 'author','manage_categories' );
    }
}
add_action( 'admin_init', 'blanket_add_manage_cat_to_author_role', 10, 0 );