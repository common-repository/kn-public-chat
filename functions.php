<?php
function install_kn_malay_chat() {
	$kn_plugin="kn_malay_chat";
	add_option( $kn_plugin.'_version', '1.0.2', '', 'yes' );
	add_option( $kn_plugin.'_cboxheight', '500', '', 'yes' );
	add_option( $kn_plugin.'_cboxwidth', '100', '', 'yes' );
	add_option( $kn_plugin.'_cboxid', '712345', '', 'yes' );
	add_option( $kn_plugin.'_securitytag', 'kjd3nq', '', 'yes' );
	add_option( $kn_plugin.'_privatekey', '1i1c008jh59fo4o4', '', 'yes' );
	add_option( $kn_plugin.'_premium', 'yes', '', 'yes' );
	update_option( $kn_plugin.'_version', '1.0.2' );
}
function uninstall_kn_malay_chat() {
	$kn_plugin="kn_malay_chat";
	delete_option( $kn_plugin.'_version' );
	delete_option( $kn_plugin.'_cboxheight' );
	delete_option( $kn_plugin.'_cboxwidth' );
	delete_option( $kn_plugin.'_cboxid' );
	delete_option( $kn_plugin.'_securitytag' );
	delete_option( $kn_plugin.'_privatekey' );
	delete_option( $kn_plugin.'_premium' );
}
function knmalaychatcode(){
	include "var.php";
	include "chat.php";
}
if ( is_admin() ){
	add_action('admin_menu', 'kn_malay_chat_menu');
		function kn_malay_chat_menu() {
			add_menu_page('Public Chat', 'Public Chat', 'administrator', 'kn_malay_chat', 'kn_malay_chat_page', WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'images/icon.png');
			add_action( 'admin_init', 'register_kn_malay_chat' );
		}
}
function register_kn_malay_chat() {
	register_setting( 'kn_malay_chat_group', 'kn_malay_chat_version' );
	register_setting( 'kn_malay_chat_group', 'kn_malay_chat_cboxheight' );
	register_setting( 'kn_malay_chat_group', 'kn_malay_chat_cboxwidth' );
	register_setting( 'kn_malay_chat_group', 'kn_malay_chat_cboxid' );
	register_setting( 'kn_malay_chat_group', 'kn_malay_chat_securitytag' );
	register_setting( 'kn_malay_chat_group', 'kn_malay_chat_privatekey' );
	register_setting( 'kn_malay_chat_group', 'kn_malay_chat_premium' );
}
function kn_malay_chat_page() {
	include "var.php";
	include "setting.php";
}
//widget
class Public_Chat extends WP_Widget {
	function __construct() {
		parent::WP_Widget( 'kn_malay_chat_widget','Public_Chat', array( 'description' => 'A public chat widget' ) );
	}
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $before_widget;
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } ?>
		<?php include "var.php";include "chat.php"; ?>
		<?php echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}
	function form( $instance ) {
		if ( $instance ) {
			$title = esc_attr( $instance[ 'title' ] );
		}
		else {
			$title = __( 'Public Chat', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<?php 
	}
}
add_action( 'widgets_init', create_function( '', 'register_widget("Public_Chat");' ) );
?>