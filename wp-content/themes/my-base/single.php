<?php get_header(); ?>
	<div id="container">
		
		<?php get_sidebar('left'); ?>
		
		<div id="content" class="<?php content_class(); ?>">				  
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<!-- end post -->
					<?php get_template_part('post-type/single'); ?>
					
					<!-- navigation -->
					<div class="navigation">
						<span class="previous-posts"><?php previous_post_link( '%link', ' &laquo; Previous ' ); ?></span>
						<span class="next-posts"><?php next_post_link( '%link', 'Next &raquo;' ); ?></span>
					</div> <!-- end navigation -->

					<?php comments_template(); ?>
				
				<?php endwhile; else : ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
		</div>
		<?php get_sidebar('right'); ?>
				
		<div class="content-bottom"></div>
	</div>
<?php get_footer(); ?>

