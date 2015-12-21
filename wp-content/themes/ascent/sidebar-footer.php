<?php
/**
 * The sidebar containing the main widget area
 *
 * @package ascent
 */
?>
  

    <?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
    <div class="sidebar-padder">

      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'sidebar-footer' ) ) : ?>
  
        <aside id="pages" class="widget widget_pages">
          <?php wp_list_pages(); ?>
        </aside>
  
        <aside id="search" class="widget widget_search">
          <?php get_search_form(); ?>
        </aside>
  
        <aside id="archives" class="widget widget_archive">
          <h3 class="widget-title"><?php _e( 'Archives', 'ascent' ); ?></h3>
          <ul>
            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
          </ul>
        </aside>
  
        <aside id="meta" class="widget widget_meta"> 
          <h3 class="widget-title"><?php _e( 'Meta', 'ascent' ); ?></h3>
          <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
          </ul>
        </aside>
  
      <?php endif; ?>
      
    </div><!-- close .sidebar-padder -->
