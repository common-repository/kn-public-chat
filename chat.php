<?php
if ( is_user_logged_in() ) {
	if ($display_name=="admin"){
		echo "Sorry, You are not allow to chat in this room because of your display name. Please change your display name <a href='" . get_option('siteurl') . "/wp-admin/profile.php'>here</a>.";
	}
	else {
		$uname = $display_name;
?>

<!-- KN Public Chat <?php echo $version; ?> By KakiNetwork Begin -->
<div id="cboxdiv" style="text-align: center; line-height: 0">
<div><iframe frameborder="0" width="<?php if ($cboxwidth=='100'){echo "100%";} else {echo $cboxwidth . "px";} ?>" height="<?php if ($cboxheight=='100'){echo "100%";} else {echo $cboxheight . "px";} ?>" src="http://www6.cbox.ws/box/?boxid=<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>&amp;boxtag=<?php if ($premium=='no'){ if ($securitytag=='KakiNetwork.Com'){ echo "kjd3nq"; } else { echo $securitytag; } } else { if ($securitytag=='KakiNetwork.Com'){ echo "kjd3nq"; } else { echo $securitytag; } } ?>&amp;sec=main" marginheight="2" marginwidth="2" scrolling="auto" allowtransparency="yes" name="cboxmain6-<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>" style="border:#ababab 1px solid;" id="cboxmain6-<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>"></iframe></div>
<div><iframe frameborder="0" width="<?php if ($cboxwidth=='100'){echo "100%";} else {echo $cboxwidth . "px";} ?>" height="75" src="http://www6.cbox.ws/box/?boxid=<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>&amp;boxtag=<?php if ($premium=='no'){ if ($securitytag=='KakiNetwork.Com'){ echo "kjd3nq"; } else { echo $securitytag; } } else { if ($securitytag=='KakiNetwork.Com'){ echo "kjd3nq"; } else { echo $securitytag; } } ?>&amp;sec=form&nme=<?php echo $name; ?>&nmekey=<?php echo $key; ?>&pic=<?php echo $gravatar_pic; ?>&lnk=<?php echo $profile_url; ?>&ekey=<?php echo $ekey; ?>" marginheight="2" marginwidth="2" scrolling="no" allowtransparency="yes" name="cboxform6-<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>" style="border:#ababab 1px solid;border-top:0px" id="cboxform6-<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>"></iframe></div>
</div>
<!-- KN Public Chat <?php echo $version; ?> By KakiNetwork End -->

<?php
	}
} if ( !is_user_logged_in() ) {
	$random = rand(1,9999);
	$uname = "guest_" . $random;
?>

<!-- KN Public Chat By KakiNetwork Begin -->
<div id="cboxdiv" style="text-align: center; line-height: 0">
<div><iframe frameborder="0" width="<?php if ($cboxwidth=='100'){echo "100%";} else {echo $cboxwidth . "px";} ?>" height="<?php if ($cboxheight=='100'){echo "100%";} else {echo $cboxheight . "px";} ?>" src="http://www6.cbox.ws/box/?boxid=<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>&amp;boxtag=<?php if ($premium=='no'){ if ($securitytag=='KakiNetwork.Com'){ echo "kjd3nq"; } else { echo $securitytag; } } else { if ($securitytag=='KakiNetwork.Com'){ echo "kjd3nq"; } else { echo $securitytag; } } ?>&amp;sec=main" marginheight="2" marginwidth="2" scrolling="auto" allowtransparency="yes" name="cboxmain6-<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>" style="border:#ababab 1px solid;" id="cboxmain6-<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>"></iframe></div>
	<?php
	if (isset($_POST["set_public_chat"])) { ?>
		<div><iframe frameborder="0" width="<?php if ($cboxwidth=='100'){echo "100%";} else {echo $cboxwidth . "px";} ?>" height="75" src="http://www6.cbox.ws/box/?boxid=<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>&amp;boxtag=<?php if ($premium=='no'){ if ($securitytag=='KakiNetwork.Com'){ echo "kjd3nq"; } else { echo $securitytag; } } else { if ($securitytag=='KakiNetwork.Com'){ echo "kjd3nq"; } else { echo $securitytag; } } ?>&amp;sec=form&nme=<?php echo $name; ?>&nmekey=<?php echo $key; ?>&pic=<?php echo $gravatar_pic; ?>&lnk=<?php echo $profile_url; ?>&ekey=<?php echo $ekey; ?>" marginheight="2" marginwidth="2" scrolling="no" allowtransparency="yes" name="cboxform6-<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>" style="border:#ababab 1px solid;border-top:0px" id="cboxform6-<?php if ($premium=='no'){ if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo "712345"; } } else { if ($cboxid=='KakiNetwork.Com'){ echo "712345"; } else { echo $cboxid; } } ?>"></iframe></div>
	<?php
	} else { ?>
		<div align="left">
		<form method="post" action="<?php echo get_permalink(); ?>">
		<input type="hidden" name="set_public_chat" />
		<p><b style="font-weight: bolder;color: #578EB5;font-family: Tahoma, sans-serif;font-size: 9pt;">Nickname : </strong><input type="txt" name="name_public_chat" value="nickname" autocomplete="off" size="9" onblur="this.value=(this.value=='') ? 'nickname' : this.value;" onfocus="this.value=(this.value=='nickname') ? '' : this.value;" widdit="on" autocomplete="off" style="background-color: #EDF3F7;border: #C3D7E5 1px solid;color: #232323;font-family: Tahoma, sans-serif;font-size: 9pt;width: <?php if ($cboxwidth=='100'){echo "100%";} else {echo $cboxwidth . "px";} ?>;" /></b></p>		
		<p><b style="font-weight: bolder;color: #578EB5;font-family: Tahoma, sans-serif;font-size: 9pt;">Email : </strong><input type="txt" name="email_public_chat" value="hai@kakinetwork.com" autocomplete="off" size="9" onblur="this.value=(this.value=='') ? 'hai@kakinetwork.com' : this.value;" onfocus="this.value=(this.value=='hai@kakinetwork.com') ? '' : this.value;" widdit="on" autocomplete="off" style="background-color: #EDF3F7;border: #C3D7E5 1px solid;color: #232323;font-family: Tahoma, sans-serif;font-size: 9pt;width: <?php if ($cboxwidth=='100'){echo "100%";} else {echo $cboxwidth . "px";} ?>;" /></b></p>
		<input type="submit" value="Chat!" /><br/>
		</form>
		</div>
	<?php
	}
	?>
</div>
<!-- KN Public Chat By KakiNetwork End -->

<?php
}
?>