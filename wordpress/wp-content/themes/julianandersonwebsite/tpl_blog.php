<?php

/*
Template Name: Blog Posts
 */

get_header();
?>
<section class="blog-1">
        <div class="judul-blog">
            <h1>BLOG</h1>
        </div>
	</section>

	<div class="blog-post">
		<div class="full-blog" id="primary">
			<main id="content" class="full-blog-inside" role="main">
			
			<?php if (have_posts()) : ?>

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part('content', get_post_format());
			?>

			<?php endwhile; ?>

			<?php bootstrap2wordpress_paging_nav(); ?>

			<?php else : ?>
	
				<?php get_template_part('content', 'none'); ?>
	
			<?php endif; ?>
			
			</main><!-- content -->

		</div><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer(); ?>
