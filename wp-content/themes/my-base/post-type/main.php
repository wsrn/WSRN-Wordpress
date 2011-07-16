<?php the_post_thumbnail('large'); ?>
<!-- start post -->
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<!-- title of post -->
	<?php get_template_part('post/main-title'); ?>

	
	<!-- header-->
	<?php get_template_part('post/meta-top'); ?>
	
	<!-- content  -->								
	<div class="entry">									
		<?php if(strlen($post -> post_title) == 0){ ?> <p><a href="<?php the_permalink() ?>">Read more about this..</a></p> <?php }?>
		<?php the_content('Click here to read more.. &raquo;'); ?>
		<?php wp_link_pages( array( 'before' => '<p><div class="navigation"><div id="previous-posts">' . __( 'Pages:', '' ), 'after' => '</div></div></p>' ) ); ?>
	</div>
	
	<!-- footer-->
	<?php get_template_part('post/meta-bottom'); ?>
</div>