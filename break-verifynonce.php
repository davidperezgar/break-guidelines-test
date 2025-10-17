<?php 

// BAD: Unconditional call - line 7
wp_verify_nonce( $_POST['_wpnonce'], 'my_action' );
update_option( 'my_option', $_POST['value'] );

// BAD: Unsafe AND condition - line 11
if ( isset( $_POST['value'] ) && ! wp_verify_nonce( $_POST['_wpnonce'], 'my_action' ) ) {
	wp_die( 'Nonce failed' );
}
