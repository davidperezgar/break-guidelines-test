<?php

function secure_but_not_recommended( $ids, $status ) {
	global $wpdb;
	$in = "'" . join( "','", array_map( 'esc_sql', $ids) ) . "'";
	$sql = "SELECT * FROM $wpdb->posts WHERE ID IN ($in)";
	return $wpdb->get_results( $wpdb->prepare( $sql . " AND post_status = %s", $status ) );
}


function insecure_do_not_use( $ids, $status ) {
	global $wpdb;
	$in = "'" . join( "','", array_map( 'sanitize_text_field', $ids) ) . "'";
	$sql = "SELECT * FROM $wpdb->posts WHERE ID IN ($in)";
	return $wpdb->get_results( $wpdb->prepare( $sql . " AND post_status = %s", $status ) );
}

/*
Check the following rules:
WordPress.DB.PreparedSQLPlaceholders: LikeWithoutWildcards, UnnecessaryPrepare, UnfinishedPrepare, MissingReplacements
*/

function insecure_do_not_use_2( $ids, $status ) {
	global $wpdb;
	$in = "'" . join( "','", array_map( 'sanitize_text_field', $ids) ) . "'";
	$sql = "SELECT * FROM $wpdb->posts WHERE ID IN ($in)";
	return $wpdb->get_results( $wpdb->prepare( $sql . " AND post_status = %s", $status ) );
}