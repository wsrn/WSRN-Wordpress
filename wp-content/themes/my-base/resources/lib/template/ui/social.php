<style>
	.wrap h2{
		border-bottom:1px solid #CCCCCC;
		padding-bottom:0;
	}
</style>

<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div>
		<h2>
			<a href="?page=my_template" class="nav-tab">Template Options</a>
			<a href="?page=my_social" class="nav-tab  nav-tab-active">Social Networks Options</a>
			
		</h2>
		<h3>Social Networks Options</h3>
		<p>
			<form method="post" action="options.php">
				<?php settings_fields('my_social_og'); ?>
					<table class="form-table" style="margin-top: 20px; padding-bottom: 10px; border: 1px dotted #bbb; border-width:1px 0;">
						<tr valign="top">
							<th scope="row">
								<strong>Fill this with your's twitter account</strong>
							</th>
							<td scope="row">
								 if you want to display it
								<p><input type="text"  name="fs_twitter" style="width:400px;" value= "<?php if(strlen(get_option('fs_twitter')) > 0){ echo get_option('fs_twitter'); } ?>"></p>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								<strong>Fill with your's facebook account</strong>
							</th>
							<td scope="row">
								if you want to display it
								<p><input type="text"  name="fs_facebook" style="width:400px;" value= "<?php if(strlen(get_option('fs_facebook')) > 0){ echo get_option('fs_facebook'); } ?>"></p>
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
		</p>	
</div>