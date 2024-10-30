<div class="wrap">
	<div id="icon-plugins" class="icon32"><br></div>
	<h2>KN Public Chat <?php echo $version; ?> Settings</h2>
	<form method="post" action="options.php">
		<input type="hidden" name="<?php echo $kn_plugin; ?>_version" id="<?php echo $kn_plugin; ?>_version" value="<?php echo $versi; ?>"/>
		<?php settings_fields( 'kn_malay_chat_group' ); ?>
		<?php do_settings_sections( 'kn_malay_chat_group' ); ?>
		<style>#publicchattabs li{display: inline;list-style-type: none;padding-right: 20px;}</style>
		<script src="<?php echo $plugin_url; ?>javascript.js" type="text/javascript"></script>
		<script>document.observe('dom:loaded',function(){new Control.Tabs('publicchattabs');});</script>	
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<td>
					<ul id="publicchattabs">
						<li><a href="#status"><img src="<?php echo $plugin_url; ?>images/icons/status.png" /></a></li>
						<li><a href="#tools"><img src="<?php echo $plugin_url; ?>images/icons/tools.png" /></a></li>
						<li><a href="#info"><img src="<?php echo $plugin_url; ?>images/icons/info.png" /></a></li>
					</ul>
				</td>
			</tr>
		</tbody>
	</table>
	<?php include "manage.php"; ?>
	</form>
</div>
<div align="right">
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="YMGWTM2BMNB5C">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>
</div>