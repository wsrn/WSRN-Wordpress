<?php 
	if(strlen($post -> post_title) > 0){ 
?>  
	<h2 class="title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
	</h2>
<?php 
	}
?>