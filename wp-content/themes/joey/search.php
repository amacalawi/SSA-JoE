<?php
get_header();
get_template_part('navigationlink');

global $wp_query;

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$search_query = array('post_type' => 'post', 'post_status'=>'publish', 's'=>get_search_query(), 'paged' => $paged);
$search = new WP_Query( $search_query );

$total_results = $search->found_posts;
$displayed_results = $search->post_count;


 ?>

<?php if ( have_posts() ) :

    include "search-result.php";

else: ?>


    <main class="container page-section">
        <div class="col-sm-12">
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Did not match any query', 'blanket' ); ?></h1>
            </header>
        </div>
        <section class="page col-sm-9">
            <small><?php _e( 'The search found nothing.', 'blanket' ); ?></small>
            <small><?php _e( 'Perhaps searching for a different keyword might help.', 'blanket' ); ?></small>
            <div class="form-group"><?php
                get_search_form(); ?>
            </div>
        </section>
        <aside class="col-sm-3"><?php
            get_sidebar(); ?>
        </aside>
    </main>


<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>