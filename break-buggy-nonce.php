<?php
function insecure_nonce_1() {
	if ( isset( $post_data['nonce'] ) && ! wp_verify_nonce( $post_data['nonce'], 'my_nonce' ) ) { // unsafe!
		wp_send_json_error( new WP_Error( 'invalid_code' ) );
	}
}

function insecure_nonce_2() {
	if ( isset( $_REQUEST['my-nonce'] ) && ! wp_verify_nonce( $_REQUEST['my-nonce'], 'post-nonce' ) ) // unsafe!
		die( 'Security check' );
}

function insecure_nonce_3() {
	if ( isset( $_POST['my_nonce_field'] ) && ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['my_nonce_field'] ) ), 'my_nonce' ) ) { // unsafe!
		return;
	}
}