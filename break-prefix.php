<?php
// This is a test plugin to check for the use of global variables without a prefix.
function dosomething() {
	echo 'Hello, World!';
}

function er_dosomething() {
	echo 'Hello, World!';
}

function tppg_dosomething() {
	echo 'Hello, World!';
}

register_setting( 'my_options_group', 'my_option_full_name', 'sanitize_text_field' );
register_setting( 'my_options_group', 'my_option_email', 'sanitize_email' );
register_setting( 'my_options_group', 'my_option_address', 'sanitize_text_field' );
register_setting( 'my_options_group', 'my_option_phone', 'sanitize_text_field' );