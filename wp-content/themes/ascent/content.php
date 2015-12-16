<?php
/**
 * @package ascent
 */
?>

<?php // Styling Tip! 

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below. 
// Simply replace post_class() with post_class('panel') and check your site!   
// Remember to do this for all content templates you want to have this, 
// for example content-single.php for the post single view. ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="row">
	<div class="post-meta-info col-sm-12 col-md-2">
	    <?php if ( 'post' == get_post_type() ) : ?>
	    <div class="entry-meta">
		<time class="entry-time updated" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><?php the_time('M'); ?><strong><?php the_time('d'); ?></strong></time>
		<span class="comments_count clearfix entry-comments-link"><?php comments_popup_link(__('0', 'ascent'), __('1', 'ascent'), __('%', 'ascent')); ?></span>
	    </div><!-- .entry-meta -->
	    <?php endif; ?>
	</div><!--.post-meta-info-->
	
	<div class="post-content-wrap col-sm-12 col-md-10">
	    <header class="page-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<span class="entry-author">
		    <?php _e('Posted by', 'ascent') ?>
		    <span class="author vcard entry-author-link">
			<?php the_author_posts_link(); ?>
		    </span>
		</span>
	    </header><!-- .entry-header -->
    
	<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
	    <div class="entry-summary">
		<?php the_excerpt(); ?>
		<a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read More &rarr;', 'ascent'); ?></a>
	    </div><!-- .entry-summary -->
	    
	<?php else : ?>
	    
	    <div class="entry-content">
		<?php $format = get_post_format($post->ID); ?>
		<?php if (has_post_thumbnail($post->ID)): ?>
		    <?php 
		    $image_id = get_post_thumbnail_id();
		    $full_image_url = wp_get_attachment_url($image_id);
		    ?>
		    <?php if ( '' != get_the_post_thumbnail() ): ?>
			<figure>
			    <a class="swipebox" href="<?php echo $full_image_url; ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('blog-page'); ?>
			    </a>
			</figure>
		    <?php endif; ?>
		<?php endif; ?>
		
		<?php the_excerpt(); ?>
		
		<?php
		    wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'ascent' ),
			'after'  => '</div>',
		    ) );
		?>
		<a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read More &rarr;', 'ascent'); ?></a>
		
	    </div><!-- .entry-content -->
	<?php endif; ?>
    
	    <footer class="footer-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		
		    <?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'ascent' ) );
		    ?>
		    <?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'ascent' ) );
		    ?>
		    
		    <?php if ( ($categories_list && ascent_categorized_blog()) || ($tags_list) ): ?>
			<div class="cat-tag-meta-wrap">
			    <?php if ( $categories_list && ascent_categorized_blog() ) : ?>
				<span class="cats-meta"><?php printf( __( '<i class="fa fa-folder"></i> %1$s', 'ascent' ), $categories_list ); ?></span>
			    <?php endif; ?>
			    <?php if ( $tags_list ) : ?>
				<span class="tags-meta"><?php printf( __( '<i class="fa fa-tags"></i> %1$s', 'ascent' ), $tags_list ); ?></span>
			    <?php endif; ?>
			</div>
		    <?php endif; ?>
		<?php endif; ?>
	    </footer><!-- .entry-meta -->			
	</div><!--.post-content-wrap-->
	
    </div><!--.row-->
</article><!-- #post-## -->