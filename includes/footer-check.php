<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action( 'wp_footer', 'fsbgimg_check_wp_footer_exists' );
function fsbgimg_check_wp_footer_exists(){
	$current_user_can	= apply_filters( 'fsbgimg_current_user_can', 'manage_options' );
	$display_text		= __( 'Congratulations! wp_footer() exists in your current theme.', 'wp-head-wp-footer-exist' );
	if ( is_user_logged_in() && current_user_can( $current_user_can ) ){ ?>
		<script type="text/javascript">
			window.alert("<?php echo $display_text; ?>");
		</script>
	<?php }
}