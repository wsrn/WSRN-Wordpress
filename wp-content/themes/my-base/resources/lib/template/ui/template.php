<style>
	.wrap h2{
		border-bottom:1px solid #CCCCCC;
		padding-bottom:0;
	}
</style>

<?php
	if(get_option('fs_template')){
		$value = get_option('fs_template');
	}else{
		$value = _TEMPLATE_;
	}
?>

<div class="wrap">
<div id="icon-options-general" class="icon32"><br /></div>

<!-- Title Page -->
<h2>
	<a href="?page=my_template" class="nav-tab nav-tab-active">Template Options</a>
	<a href="?page=my_social" class="nav-tab">Social Networks Options</a>
</h2>
<form method="post" action="options.php">
	<?php settings_fields('my_template_og'); ?>
	<table class="form-table" style="margin-top: 20px; padding-bottom: 10px; border: 1px dotted #bbb; border-width:1px 0;">
	<tr valign="middle">
		<th scope="row"><strong> Choose were you want the sidebar to be</strong></th>
		<td>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue-sidebar" <?php if($value == 'blue-sidebar'){ echo 'checked'; } ?>/> 
				<small> one sidebar in left</small> 
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.green-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.green-sidebar" <?php if($value == 'blue.green-sidebar'){ echo 'checked'; } ?>/> 
				<small>2 sidebars in left</small>
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/red.blue.green-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="red.blue.green-sidebar" <?php if($value == 'red.blue.green-sidebar'){ echo 'checked'; } ?>/> 
				<small>3 sidebars in left</small> 
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.green.orange-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.green.orange-sidebar" <?php if($value == 'blue.green.orange-sidebar'){ echo 'checked'; } ?>/> 
				<small>3 sidebars in left</small>
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/red.blue.green.orange-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="red.blue.green.orange-sidebar" <?php if($value == 'red.blue.green.orange-sidebar'){ echo 'checked'; } ?>/> 
				<small>4 sidebars in left</small>
			</p>
			
			<p style="display:bloc; clear:both; height:20px;">
			</p>
			
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.silver.r-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.silver.r-sidebar" <?php if($value == 'blue.silver.r-sidebar'){ echo 'checked'; } ?>/> 
				<small> one sidebar in left and one sidebar in right</small> 
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.green.silver.r-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.green.silver.r-sidebar" <?php if($value == 'blue.green.silver.r-sidebar'){ echo 'checked'; } ?>/> 
				<small>2 sidebars in left and  one sidebar in right</small>
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/red.blue.green.silver.r-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="red.blue.green.silver.r-sidebar" <?php if($value == 'red.blue.green.silver.r-sidebar'){ echo 'checked'; } ?>/> 
				<small>3 sidebars in left and one sidebar in right</small> 
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.green.orange.silver.r-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.green.orange.silver.r-sidebar" <?php if($value == 'blue.green.orange.silver.r-sidebar'){ echo 'checked'; } ?>/> 
				<small>3 sidebars in left and one sidebar in right</small>
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/red.blue.green.orange.silver.r-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="red.blue.green.orange.silver.r-sidebar" <?php if($value == 'red.blue.green.orange.silver.r-sidebar'){ echo 'checked'; } ?>/> 
				<small>4 sidebars in left and one sidebar in right</small>
			</p>
			
			<p style="display:bloc; clear:both; height:20px;">
			</p>
			
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.l-sidebar" <?php if($value == 'blue.l-sidebar'){ echo 'checked'; } ?>/> 
				<small> one sidebar in right</small> 
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.green.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.green.l-sidebar" <?php if($value == 'blue.green.l-sidebar'){ echo 'checked'; } ?>/> 
				<small>2 sidebars in right</small>
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/red.blue.green.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="red.blue.green.l-sidebar" <?php if($value == 'red.blue.green.l-sidebar'){ echo 'checked'; } ?>/> 
				<small>3 sidebars in right</small> 
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.green.orange.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.green.orange.l-sidebar" <?php if($value == 'blue.green.orange.l-sidebar'){ echo 'checked'; } ?>/> 
				<small>3 sidebars in right</small>
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/red.blue.green.orange.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="red.blue.green.orange.l-sidebar" <?php if($value == 'red.blue.green.orange.l-sidebar'){ echo 'checked'; } ?>/> 
				<small>4 sidebars in right</small>
			</p>
			
			<p style="display:bloc; clear:both; height:20px;">
			</p>
		
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.green.silver.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.green.silver.l-sidebar" <?php if($value == 'blue.green.silver.l-sidebar'){ echo 'checked'; } ?>/> 
				<small>2 sidebars in right and  one sidebar in left</small>
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/red.blue.green.silver.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="red.blue.green.silver.l-sidebar" <?php if($value == 'red.blue.green.silver.l-sidebar'){ echo 'checked'; } ?>/> 
				<small>3 sidebars in right and one sidebar in left</small> 
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/blue.green.orange.silver.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="blue.green.orange.silver.l-sidebar" <?php if($value == 'blue.green.orange.silver.l-sidebar'){ echo 'checked'; } ?>/> 
				<small>3 sidebars in right and one sidebar in left</small>
			</p>
			<p style="width:115px; float:left; margin:0px 12px 0px 0px;">
				<img style="padding:0px 10px 10px 0px"src="<?php echo get_bloginfo('template_directory');?>/resources/images/sidebar/red.blue.green.orange.silver.l-sidebar.png" />
				<br />
				<input type="radio" name="fs_template" value="red.blue.green.orange.silver.l-sidebar" <?php if($value == 'red.blue.green.orange.silver.l-sidebar'){ echo 'checked'; } ?>/> 
				<small>4 sidebars in right and one sidebar in left</small>
			</p>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><strong>Limit menu items</strong></th>
		<td>
			<small>Max items displayed in menu.</small><br />
			<input type="text" name="fi_menu_limit" style="width:300px; "value="<?php if(get_option('fi_menu_limit')){ echo get_option('fi_menu_limit'); } else { echo _LIMIT_; } ?>"/><br> 
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><strong>Home Label</strong></th>
		<td>
			<small>Set Label for home item from base menu.</small><br />
			<input type="text" name="fs_home_label" style="width:300px; "value="<?php if(get_option('fs_home_label')){ echo get_option('fs_home_label'); } else { echo _HOME_LABEL_; } ?>"/><br> 
		</td>
	</tr>
	</table>

	<p class="submit">
		<input type="submit" class="button-primary" value="Save Changes" />
	</p>
</form>
<!-- PalPay Button Donate -->
		<div style="float:right; display:inline;">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_donations">
				<input type="hidden" name="business" value="S6JD2HALWXNPS">
				<input type="hidden" name="lc" value="RO">
				<input type="hidden" name="currency_code" value="EUR">
				<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHosted">
				<center><input type="image" style="border:0px" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div> 
</div>