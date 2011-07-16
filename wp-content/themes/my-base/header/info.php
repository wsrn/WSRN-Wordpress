<div id="blog-info">
	<?php if( is_home() ) { ?>
			<p class="title-blog"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></p>
			<h1 class="description-blog"><?php bloginfo('description'); ?></h1>
	<?php }else{ ?>
			<p class="title-blog"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></p>
			<p class="description-blog"><?php bloginfo('description'); ?></p>
	<?php }?>
</div>