<?php get_header(); ?>
	<div id="container">
		
		<?php get_sidebar('left'); ?>
				
		<div id="content" class="<?php content_class(); ?>">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1 class="title"><?php the_title(); ?></h1> 
					<?php if(function_exists('the_views')) { the_views(); } ?>
					<div class="entry">	
						<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
						<?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
					</div>
				</div>
				<br /><br />
				<?php comments_template(); ?>
				
			<?php endwhile; endif; ?>
		</div>
		
		<?php get_sidebar('right'); ?>
		
		<div class="content-bottom"></div>
  </div><!--/content -->
<?php get_footer(); ?>