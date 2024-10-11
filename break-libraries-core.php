<?php

add_action( 'init', 'break_guidelines_test' );
function break_guidelines_test() {
	// Include jquery.
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true );
}