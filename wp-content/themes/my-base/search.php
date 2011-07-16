<?php get_header(); ?>
	<div id="container">
		
		<?php get_sidebar('left'); ?>
		
		<div id="content" class="<?php content_class(); ?>">
			<p class="search-result"><b>Search Results</b></p>
			<?php if (have_posts()) : ?>
				<?php 
					while (have_posts()){ 
						the_post();
						get_template_part('post-type/search');
					}
				?>

				<div class="navigation">
					<span class="previous-posts"><?php next_posts_link('&laquo; Previous') ?></span> <span class="next-posts"><?php previous_posts_link('Next &raquo;') ?></span>
				</div>

			<?php else : ?>
				<h4>Sorry, nothing found.</h4>
			<?php endif; ?>
		</div>
		
		<?php get_sidebar('right'); ?>
		
		<div class="content-bottom"></div>
	</div>
<?php get_footer(); ?>