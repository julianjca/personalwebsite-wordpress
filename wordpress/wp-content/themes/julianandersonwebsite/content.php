<?php

/**
 * @package Julian_Anderson_Website
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title(sprintf('<h3 class="judul-post"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>

		<?php if ('post' == get_post_type()) : ?>
		
		<div class="blog-1">
			<div class="icon-1"><i class="fa fa-user"></i> <?php the_author(); ?></div>
			<div class="icon-1"><i class="fas fa-clock"></i> <time><?php the_date(); ?></time></div>
			<div class="icon-1"><i class="fa fa-folder"></i> <?php the_category(', ') ?></div>
			<div class="icon-1"><i class="fa fa-tags"></i> <?php the_tags(); ?></div>
				
			<div class="post-comments-badge">
				<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%'); ?></a>
			</div><!-- post-comments-badge -->
			
			<div class="edit-post">
			<?php edit_post_link('Edit', '<i class="fa fa-pencil"></i> ', ''); ?>
			</div>
			
		</div><!-- post-details -->
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if (has_post_thumbnail()) { // check for feature image ?> 
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
	<?php 
} ?>
	
	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- post-excerpt -->
	
</article><!-- #post-## -->
