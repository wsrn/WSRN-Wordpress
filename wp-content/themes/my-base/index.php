<?php get_header(); ?>
	<div id="container">
		
		<?php get_sidebar('left'); ?>
		
		<div id="content" class="<?php content_class(); ?>">				  
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<!-- post -->
					<?php get_template_part('post-type/main'); ?>
				
				<?php endwhile; ?><!-- end loop post -->

				<!-- Navigation-->
				<div class="navigation">
				  <span class="previous-posts"><?php next_posts_link('&laquo; Previous ') ?></span> <span class="next-posts"><?php previous_posts_link('Next &raquo;') ?></span>
				</div><!-- end navigation-->
		
			<?php else : ?>
		
				<h2>Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>
			
			<?php endif; ?>
		</div>
		
		<?php get_sidebar('right'); ?>
		
		<div class="content-bottom"></div>
	</div>
<?php get_footer(); ?>
