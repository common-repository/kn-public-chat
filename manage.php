<div id="status">
	<h1>Status</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top"><th scope="row"><label for="size"><strong>cbox.ws size : </strong></label></th>
				<td>
					<span class="description">
						<ul>Height Size : <?php if ($cboxheight=='100'){echo "Automatic";} else {echo $cboxheight . "px";} ?></ul>
						<ul>Width Size : <?php if ($cboxwidth=='100'){echo "Automatic";} else {echo $cboxwidth . "px";} ?></ul>
					</span>
				</td>
			</tr>
<?php if ($premium=='yes'){ ?>
			<tr valign="top"><th scope="row"><label for="details"><strong>cbox.ws details : </strong></label></th>
				<td>
					<span class="description">
						<ul>ID : 
						
<?php if ($cboxid=='712345'){ echo "You are using KakiNetwork.Com Public Chat."; } elseif ($cboxid=='KakiNetwork.Com'){ echo "You are using KakiNetwork.Com Public Chat."; } else { echo $cboxid; } ?></ul>
						<ul>Security Tag : <?php if ($securitytag=='kjd3nq'){ echo "You are using KakiNetwork.Com Public Chat."; } elseif ($securitytag=='KakiNetwork.Com'){ echo "You are using KakiNetwork.Com Public Chat."; } else { echo $securitytag; } ?></ul>
						<ul>Private Key : <?php if ($privatekey=='1i1c008jh59fo4o4'){ echo "You are using KakiNetwork.Com Public Chat."; } elseif ($privatekey=='KakiNetwork.Com'){ echo "You are using KakiNetwork.Com Public Chat."; } else { echo $privatekey; } ?></ul>
					</span>
				</td>
			</tr>
<?php } ?>
<?php if ($premium=='no'){ ?>
			<tr valign="top"><th scope="row"><label for="details"><strong>cbox.ws details : </strong></label></th>
				<td>
					<span class="description">
						<ul>You are using KakiNetwork.Com Public Chat.</ul>
					</span>
				</td>
			</tr>
<?php } ?>
		</tbody>
	</table>	
</div>
<div id="tools">
	<h1>Setting</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<th scope="row"><label for="Size Setting">Size Setting</label></th>
				<td>
					Width : <input type="number" name="<?php echo $kn_plugin; ?>_cboxwidth" id="<?php echo $kn_plugin; ?>_cboxwidth" value="<?php echo $cboxwidth; ?>" />
					<span class="description">Your width setting is  <?php if ($cboxwidth=='100'){echo "automatic";} else {echo $cboxwidth . ". Change to 100 for automatic size.";} ?>.</span>
					<br/>
					Height : <input type="number" name="<?php echo $kn_plugin; ?>_cboxheight" id="<?php echo $kn_plugin; ?>_cboxheight" value="<?php echo $cboxheight; ?>" />
					<span class="description">Your height setting is  <?php if ($cboxheight=='100'){echo "automatic";} else {echo $cboxheight . ". Change to 100 for automatic size.";} ?>.</span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="Cbox Setting">cbox.ws Premium Setting</label></th>
				<td>
					Do you want use cbox.ws premium features for API Intergration?
					<select name="<?php echo $kn_plugin; ?>_premium" id="<?php echo $kn_plugin; ?>_premium">
						<option <?php if ($premium=='yes'){echo "selected='selected'";} ?> value="yes">Yes</option>					
						<option <?php if ($premium=='no'){echo "selected='selected'";} ?> value="no">No</option>
					</select>
				</td>
			</tr>
<?php if ($premium=='yes'){ ?>
			<tr valign="top">
				<th scope="row"><label for="Cbox Setting">cbox.ws ID Setting</label></th>
				<td>
					cbox.ws ID : <input type="password" name="<?php echo $kn_plugin; ?>_cboxid" id="<?php echo $kn_plugin; ?>_cboxid" value="<?php echo $cboxid; ?>" />
					<span class="description">Take a look at <code>boxid=??????</code> in this <a href="http://cbox.ws/admin.php?snippet" target="_blank">page</a>. Enter the <code>??????</code> display number.</span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="Cbox Setting">cbox.ws Security Tag Setting</label></th>
				<td>
					cbox.ws security tag : <input type="password" name="<?php echo $kn_plugin; ?>_securitytag" id="<?php echo $kn_plugin; ?>_securitytag" value="<?php echo $securitytag; ?>" />
					<span class="description">Take a look at this <a href="http://cbox.ws/admin.php?snippet" target="_blank">page</a> for security tag.</span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="Cbox Setting">cbox.ws API Setting</label></th>
				<td>
					cbox.ws Private Key : <input type="password" name="<?php echo $kn_plugin; ?>_privatekey" id="<?php echo $kn_plugin; ?>_privatekey" value="<?php echo $privatekey; ?>" />
					<span class="description">Take a look at this <a href="http://cbox.ws/admin.php?userint" target="_blank">page</a> for Private Key. (only for premium cbox.ws user)</span>
				</td>
			</tr>
<?php } ?>
<?php if ($premium=='no'){ ?>
<input type="hidden" name="<?php echo $kn_plugin; ?>_cboxid" id="<?php echo $kn_plugin; ?>_cboxid" value="<?php echo $cboxid; ?>" />
<input type="hidden" name="<?php echo $kn_plugin; ?>_securitytag" id="<?php echo $kn_plugin; ?>_securitytag" value="<?php echo $securitytag; ?>" />
<input type="hidden" name="<?php echo $kn_plugin; ?>_privatekey" id="<?php echo $kn_plugin; ?>_privatekey" value="<?php echo $privatekey; ?>" />
<?php } ?>
		</tbody>
	</table>
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
<?php if ($premium=='yes'){ ?>
	<h1>Note</h1>
	<p>
		<ul>
			<li>To enable our public shared room, please write <code>KakiNetwork.Com</code> as all 3 password field.</li>
		</ul>
	</p>
<?php } ?>
</div>
<div id="info">
	<h1>Information</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<th scope="row"><label for="info"></label></th>
				<td>Hello people, I hope you love this plugin. If you have any question and suggestion for this plugin, please email me at <code>hai@kakinetwork.com</code></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="fbtwgplus"></label></th>
				<td><table><tr><td><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plusone size="standard" annotation="bubble" href="https://plus.google.com/103158195753606486338" callback="googleCB"></g:plusone></td><td><iframe src='http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2FKakiNetwork&layout=button_count&show_faces=false&width=200&action=like&font&colorscheme=light&height=21' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:90px; float: left; padding-top: 5px; height:21px; padding-left: 10px;' allowTransparency='true'></iframe></td><td><a href='https://twitter.com/KakiNetwork' class='twitter-follow-button'>Follow @KakiNetwork</a><script src='//platform.twitter.com/widgets.js' type='text/javascript'></script></td><td><a href='https://twitter.com/FreddieAziz' class='twitter-follow-button'>Follow @FreddieAziz</a><script src='//platform.twitter.com/widgets.js' type='text/javascript'></script></td></tr></table></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="donate"></label></th>
				<td>This plugin is only for who has <a href="http://cbox.ws" target="_blank">cbox.ws</a> premium account. If you don't have <a href="http://cbox.ws" target="_blank">cbox.ws</a> premium account, you can use my public room with write in <code>KakiNetwork.Com</code> in cbox.ws ID, cbox.ws security tag and cbox.ws Private Key. Try my other one plugin name <a href="http://wordpress.org/extend/plugins/kn-social-slide/" target="_blank">KN Social Slide</a>. If you like my plugin, please donate me for a cup of coffee :P</td>
			</tr>
		</tbody>
	</table>
</div>