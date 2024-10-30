<?php
$versi="1.0.2";
$kn_plugin="kn_malay_chat";
$version=get_option( $kn_plugin.'_version' );
$cboxwidth=get_option( $kn_plugin.'_cboxwidth' );
$cboxheight=get_option( $kn_plugin.'_cboxheight' );
$cboxid=get_option( $kn_plugin.'_cboxid' );
$securitytag=get_option( $kn_plugin.'_securitytag' );
$privatekey=get_option( $kn_plugin.'_privatekey' );
$premium=get_option( $kn_plugin.'_premium' );
$plugin_url=WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));

//get user details
global $current_user;
get_currentuserinfo();
$user_login=$current_user->user_login;
$user_email=$current_user->user_email;
$user_firstname=$current_user->user_firstname;
$user_lastname=$current_user->user_lastname;
$display_name=$current_user->display_name;
$ID=$current_user->ID;

//get url domain
$extension = array(".com",".net",".org",".com.my",".net.my",".org.my",".my",".co.cc",".tk");
$symbols = array("!","@","#","$","%","^","&","*","(",")","+","=","-","[","]","'",";",",",".","/","{","}","|",":","<",">","?");
$domain = get_option('siteurl');
$domain = str_replace('http://', '', $domain);
$domain = str_replace('www.', '', $domain);
$domain = str_replace($extension, '', $domain);
$domain = str_replace($symbols, '', $domain);

//username
if ( is_user_logged_in() ) {
	if ($display_name=="admin"){
		$random = rand(1,9999);
		$uname = "admin_" . $random;
	}
	else {
		$uname = $display_name;
	}
} if ( !is_user_logged_in() ) {
	$uname = $_POST["name_public_chat"];
}

//gravatar
if ( is_user_logged_in() ) {
	$kn_email = md5( strtolower( trim( $user_email ) ) );
} if ( !is_user_logged_in() ) {
	if (isset($_POST["email_public_chat"])) {
	$guest_email = $_POST["email_public_chat"];
	$kn_email = md5( strtolower( trim( $guest_email ) ) );
	}
	if (!isset($_POST["email_public_chat"])) {
	$kn_email = md5( strtolower( trim( "hai@kakinetwork.com" ) ) );
	}
}
$gravatar_full_link = "http://www.gravatar.com/avatar/" . $kn_email . "?size=45";

//cbox setting
$nick=$uname;
$gravatar=$gravatar_full_link;
$profile=get_option('siteurl');
if ($premium=='no'){
	if ($privatekey=='KakiNetwork.Com'){
		$privatekey="1i1c008jh59fo4o4";
		$kunci=$privatekey; }
	else {
		$privatekey="1i1c008jh59fo4o4";
		$kunci=$privatekey; }
} else {
	if ($privatekey=='KakiNetwork.Com'){
		$privatekey="1i1c008jh59fo4o4";
		$kunci=$privatekey; }
	else {
		$kunci=$privatekey; }
}
$name=urlencode($nick);
$key=md5($kunci.$nick);
$gravatar_pic=urlencode($gravatar);
$profile_url=urlencode($profile);
$ekey=md5($kunci."\t".$gravatar."\t".$profile);
?>
